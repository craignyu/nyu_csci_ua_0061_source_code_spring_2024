// pick a random integer between 0 and 3
let num = parseInt( Math.random() * 3 );

// determine which pokemon image we need to use
let image;
if (num === 0) {
  image = 'charmander.png';
}
else if (num === 1) {
  image = 'pikachu.png';
}
else {
  image = 'squirtle.png';
}

// output an image tag
document.write('<img src="images/' + image + '">');
