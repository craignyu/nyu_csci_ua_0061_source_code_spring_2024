async function performFetch(args) {
    /* args is an object that is formatted as follows:

        {
            // the URL to contact on the server
            url: url_to_contact

            // request method ('get' or 'post')
            method: 'get',

            // object of variables to send to the server
            data: {
                var1: value1,
                var2: value2,
                var3: value3 // ... etc
            },

            // function to run if request succeeds, should accept a single argument which is the data returned by the server
            success: function(data), 

            // function to run if request fails, should accept a single argument which is the error message
            error: function(error) 
        }
        
    */

    // GET requests
    if (args.method && args.method.toLowerCase() === 'get') {
        try {
            // package up the data to send to the server
            const params = new URLSearchParams();
            for (const varName in args.data) {
                params.append(varName, args.data[varName]);
            }

            // append variables to URL
            args.url += '?' + params.toString();

            // perform the fetch request
            const response = await fetch(args.url);

            if (response.ok) {
                const text = await response.text();
                args.success(text);
            } else {
                throw new Error("server error");
            }
        } catch (error) {
            args.error(error);
        }
    } // end GET request
    // POST requests
    else if (args.method && args.method.toLowerCase() === 'post') {
        try {
            // package up the data to send to the server
            // note that this is designed specifically to contact a PHP script
            // we will use a slightly different approach when we contact
            // node.js scripts in the next unit
            const formData = new FormData();
            for (const key in args.data) {
                if (args.data.hasOwnProperty(key)) {
                    formData.append(key, args.data[key]);
                }
            }

            // perform the fetch request
            const response = await fetch(args.url, {
                method: "POST",
                body: formData,
            });

            if (response.ok) {
                const text = await response.text();
                args.success(text);
            } else {
                throw new Error("server error");
            }
        } catch (error) {
            args.error(error);
        }
    } // end POST request
}