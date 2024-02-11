// every DOM element has a 'parentElement' property
// this property "points" to the element in the DOM that is above this element
const firstH1 = document.getElementById('firstH1');

// firstH1.parentElement points to the 'body' tag of the page, since the <h1> tag
// is organized directly inside of the <body> tag
console.log( firstH1.parentElement );

// you can treat DOM pointers the same way you would treat any other DOM element
// for example, let's set the background color of the whole page by only working with the
// firstH1 element
firstH1.parentElement.style['background-color'] = 'pink';

// just to prove they are the same!
const bodyTag = document.querySelector('body');
console.log(bodyTag === firstH1.parentElement); // true

// every element on the page has a parentElement property.  if for some reason the element
// does not have a parent this property will be set to 'null'.  Tbe only element in the DOM tree
// that does not have a parentElement by default is the 'document' object.  but if you create
// a new element and do not add it to the page it will not have a parent either
const newP = document.createElement('p');
newP.innerHTML = 'Hello, world!';
console.log(newP.parentElement);  // will be null since we haven't added it to the page yet

// now let's add this new tag to the document - we know that firstH1's parent is the body,
// so we can use that 'pointer' to append the newly created <p> tag to the document
firstH1.parentElement.appendChild( newP );
console.log(newP.parentElement);  // will be the <body> tag since we just added this element as a child




// siblings are elements that are elements in the DOM that have the same parentElement value
// each DOM element can access its next sibling (the one that comes after it) and its previous sibling
// (the one that comes before it)
console.log(firstH1.nextElementSibling);  // divOne is the next sibling of the <h1> tag
console.log(firstH1.previousElementSibling);  // null - the <h1> tag has no previous sibling

// you can 'chain' together these references as well. for example:
console.log(firstH1.nextElementSibling.nextElementSibling); // the <script> tag




// a parent can access its children using one three methods
// first, a parent can access its first child using the firstElementChild property
let body = firstH1.parentElement;
console.log( body.firstElementChild );  // the <h1> tag

// a parent can also access its last child using the lastElementChild property
console.log( body.lastElementChild ); // the <p> tag that we added above

// and a parent can access ALL of its children using the 'children' property, which is an array
// of all children.  the 0th element is the first child and the length-1 element is the last child
console.log( body.children ); // array of all children
console.log( body.children.length );  // how many children
console.log( body.children[0] );  // first child
console.log( body.children[ body.children.length-1 ] ); // last child

// you can iterate over all children using a 'for' loop as you would with any other array
for (let i = 0; i < body.children.length; i++) {
  body.children[i].style['color'] = 'blue';
}
