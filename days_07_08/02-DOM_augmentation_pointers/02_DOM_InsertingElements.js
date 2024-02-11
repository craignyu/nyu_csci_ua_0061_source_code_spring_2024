// we've already learned that the 'appendChild' method can be used to insert elements
// as 'children' of a parent element.  this method always inserts the element as the
// LAST child of the parent.  for example:
const newP = document.createElement('p');
newP.innerHTML = 'New P - created via JavaScript!';

const theDiv = document.querySelector('#one');
theDiv.appendChild(newP); // will show up as the last <p> tag in divOne



// in addition to 'appendChild', you can also insert an element before any other element
// using the 'insertBefore' method.  this method takes two arguments - the element you are inserting
// and the element that it should go before.  for example, to insert an element at the beginning
// of the div we could do the following
const newP2 = document.createElement('p');
newP2.innerHTML = 'Another P - created via JavaScript!';

// insert the element before the first child of the div
theDiv.insertBefore( newP2, theDiv.firstElementChild );



// note that you can insert an element anywhere using these two methods (appendChild and insertBefore)
// to add an element as the last child of an element use appendChild
// to add an element as the first child of an element use insertBefore (in relation to the first child)
// to add an element anywhere else you need to know what position you want it to go into.
// for example, consider the second div on the page:
const theDiv2 = document.getElementById('two');
/*
<div id="two">
  <p>First p inside the div</p>
  <p>Second p inside the div</p>
  <p>Third p inside the div</p>
</div>
*/
// this div has 3 children.  the first is child 0, the second is child 1 and the third is child 2.
// to insert an element between the first and the second you would insert it before child 1
const newP3 = document.createElement('p');
newP3.innerHTML = 'Final P - created via JavaScript';

// we can use the 'children' array to do this!
theDiv2.insertBefore( newP3, theDiv2.children[1] );





// moving children can be done using the 'appendChild' method as well

// step 1: get a reference to the element that is going to be moved
const divThree = document.querySelector('#three');
const pToMove = divThree.firstElementChild;

// step 2: remove the child (technically not necessary, but it's good practice)
divThree.removeChild( pToMove );

// step 3: add the child to its new parent
const divFour = document.querySelector('#four');
divFour.appendChild( pToMove );
