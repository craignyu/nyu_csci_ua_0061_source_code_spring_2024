// create a new 'p' tag element
const newP1 = document.createElement('p');

// put some HTML text into this element
newP1.innerHTML = 'I was created by <strong>JavaScript</strong>!';

// note that this element is not added to the page until we explicitly
// tell the DOM where it should be organized.  we do this using the
// family relationship of elements in the DOM tree

// to add the element to the end of the document we need to first find the 'body' tag
const elBody = document.querySelector('body');

// then we need to tell that tag that it has a new 'child' element
elBody.appendChild( newP1 );




// you can also create lots of new elements by repeating this process inside of a loop
// for example, let's create a new unordered list
const newUL = document.createElement('ul');

// add the list to the page
elBody.appendChild( newUL );

// now let's add 10 <li> elements under this list
for (let i = 0; i < 10; i++) {
  // create a new <li> tag
  const temp = document.createElement('li');

  // assign it a value
  temp.innerHTML = "Random number: " + parseInt(Math.random() * 1000);

  // add this node as a 'child' of the <ul> tag
  newUL.appendChild( temp );
}
