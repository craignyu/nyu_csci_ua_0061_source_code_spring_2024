// get references to all of our <div> tags
const elOne = document.getElementById('one');
const elTwo = document.getElementById('two');
const elThree = document.getElementById('three');

// assign a class of 'foo' to elOne
elOne.classList.add('foo');

// assign a class of 'bar' to elTwo
elTwo.classList.add('bar');

// assign two classes to elThree
elThree.classList.add('foo');
elThree.classList.add('zoo');

// figure out which classes are currently attached to each element (check the console)
console.log( "elOne:", elOne.classList );
console.log( "elTwo:", elTwo.classList );
console.log( "elThree:", elThree.classList );

// boolean method 'contains' checks to see if a class is attached to an element
console.log( "foo: ", elOne.classList.contains('foo'), elTwo.classList.contains('foo'), elThree.classList.contains('foo'));

// remove a class from an element
elOne.classList.remove('foo');

// note that it's totally OK to try and remove an element from a list
// even if that class is not attached to this element
elTwo.classList.remove('foo');
