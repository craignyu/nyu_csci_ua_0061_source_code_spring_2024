// get the visitor's name (as a string)
let name = prompt("What is your name? ");

// get the visitor's favorite hex color code (also as a string)
let hexColor = prompt("What is your favorite hex color code (i.e. FFCC00): ");

// output a new h1 tag that welcomes them to the page
document.write('<h1>Welcome, ' + name + '</h1>');

// create a div with their favorite color as the background
// (using template strings)
document.write(`<div class="colorBox" style="background-color: #${hexColor};"><div>`);
