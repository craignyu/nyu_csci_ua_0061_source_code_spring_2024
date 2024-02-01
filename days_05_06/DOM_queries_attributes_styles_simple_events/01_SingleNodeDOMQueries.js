// get a reference to the element that has an id of 'one'
const elOne = document.getElementById('one');

// now we can target it and change its attributes and styles
elOne.style['background-color'] = 'pink';

// we can do the same with the element that has an id of 'two'
const elTwo = document.getElementById('two');
elTwo.style['background-color'] = 'orange';

// we can use the 'querySelector' function to grab a node
// using a CSS selector. this will return ONE element, even
// if there are more than one that match!
const elLink = document.querySelector('div a');
elLink.style['background-color'] = 'yellow';

// if there's more than one element on a page that matches
// the query selector then only the first one will be returned
const elDiv = document.querySelector('div');
elDiv.style['background-color'] = 'blue';

// HTML attributes can be adjusted on a node by simply referencing them
// as a property OR by using the setAttribute function
const elImage = document.querySelector('img');
//elImage.src = 'images/charmander.png';
elImage.setAttribute('src', 'images/charmander.png'); //does the same thing

// you can change the text of a node by referencing its innerText property
const elFive = document.getElementById('five');
elFive.innerText = 'I changed the text!';
console.dir(elFive);
