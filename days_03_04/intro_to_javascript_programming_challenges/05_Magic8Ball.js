// set up an array of possible responses for our 8 ball
let responses = ['Most Likely', 'Very Doubtful', 'Ask Again', 'As I see it, yes', 'My sources say no', 'Cannot predict now', 'Yes', 'Do not count on it', 'Without a doubt', 'Better not tell you'];

// pick a response at random
let responseIndex = parseInt( Math.random() * responses.length );

// output the desired response
document.write( responses[ responseIndex ] );
