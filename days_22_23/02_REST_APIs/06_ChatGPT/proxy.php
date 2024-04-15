<?php

    // paste your Open AI API key here
    $secret_key = 'YOUR_API_KEY_GOES_HERE';
    $model = 'gpt-3.5-turbo';
    $url = 'https://api.openai.com/v1/chat/completions';
    
    // overarching messages array that contains the chat that you 
    // want to send to the model
    $messages = array();

    // individual chat messages, in order
    $message1 = array();
    $message1['role'] = 'user';
    $message1['content'] = $_POST['usermessage'];

    // push all messages into our overarching messages array
    array_push($messages, $message1);

    // additional options
    $max_tokens = 100; // the maximum number of tokens to generate in the response
    $temperature = 0.5; // the "creativity" of the response, ranging from 0.0 to 1.0
    $n = 1; // the number of responses to generate
    
    // package up all of our data into a single object
    $data = array(
        'model' => $model,
        'messages' => $messages,
        'max_tokens' => $max_tokens,
        'temperature' => $temperature,
        'n' => $n,
    );
    
    // set up CURL response header
    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $secret_key,
    );
    
    // make the request to the API and wait for a response
    // "CURL" stands for "Client URL" and is used to perform network calls
    // to resources on other servers.  you can think of this like PHP's way
    // of making a fetch request to another server.  PHP "blocks" when making
    // a CURL request, so the program will pause to wait for a response from
    // the Open AI API before continuing (unlike JavaScript which handles these
    // kinds of requests asynchronously)
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // decode results into JSON and extract the value we care about
    $results = json_decode($response, true);

    /* Given the following message:
    
            'Translate this text into French: Hello World, how are you?'

       The results will look something like this:

        (
            [id] => chatcmpl-75LcR2g70j755zzShe4hjCfcz39ZX
            [object] => chat.completion
            [created] => 1681509099
            [model] => gpt-3.5-turbo-0301
            [usage] => Array
                (
                    [prompt_tokens] => 21
                    [completion_tokens] => 9
                    [total_tokens] => 30
                )

            [choices] => Array
                (
                    [0] => Array
                        (
                            [message] => Array
                                (
                                    [role] => assistant
                                    [content] => Bonjour le monde, comment allez-vous ?
                                )

                            [finish_reason] => stop
                            [index] => 0
                        )

                )

        )
    */

    // grab the first response
    $response = $results['choices'][0]['message']['content'];

    // output to our client
    print $response;
?>