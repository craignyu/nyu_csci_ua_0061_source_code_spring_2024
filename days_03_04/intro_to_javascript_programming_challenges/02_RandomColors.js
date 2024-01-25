// pick three random integers between 0 and 256 (with 256 not inclusive)
let red = parseInt( Math.random() * 256 );
let green = parseInt( Math.random() * 256 );
let blue = parseInt( Math.random() * 256 );

// output these colors to the browser
document.write('<div>Red: ' + red + '</div>');
document.write('<div>Green: ' + green + '</div>');
document.write('<div>Blue: ' + blue + '</div>');

// create a string that packages up these colors as a CSS RGB color descriptor
let rgb = 'rgb(' + red + ',' + green + ',' + blue + ')';

// output a div on the page that will use this color
document.write('<div class="colorBox" style="background-color: ' + rgb + ';"></div>');
