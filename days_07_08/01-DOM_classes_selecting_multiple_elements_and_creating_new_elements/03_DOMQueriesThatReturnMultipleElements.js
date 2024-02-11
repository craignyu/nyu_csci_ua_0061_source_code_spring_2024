// let's get a collection of all elements that are a member of the
// 'yellowBackground' class
// IMPORTANT NOTE: getElementsByClassName will return a "living" collection of elements
// if an element on the page gains the 'yellowBackground' class at some point in the future
// this collection will be updated to include this new element.
const allYellowDivs = document.getElementsByClassName('yellowBackground');

// if we print this out we will see a collection of nodes
console.log(allYellowDivs);

// we can iterate over this array using a standard 'for' loop
for (let i = 0; i < allYellowDivs.length; i++) {
  // we can access each element using indexing
  console.log( allYellowDivs[i] );

  // we can then update each element using standard DOM manipulation techniques
  allYellowDivs[ i ].style['font-family'] = 'monospace';
}


// we an also get access to a collection of elements based on their tag names
// IMPORTANT NOTE: getElementsByTagName will return a "living" collection of elements
// if a new 'div' element is added to the page at some point in the future
// this collection will be updated to include this new element.
let allDivs = document.getElementsByTagName('div');
console.log(allDivs);

// we can then iterate over this collection and make changes accordingly
for (i = 0; i < allDivs.length; i++) {
  allDivs[ i ].style['border-radius'] = '10px';
}



// we can also use contextual selectors to obtain a collection of elements
// IMPORTANT NOTE: querySelectorAll will return a "snapshot" of this moment in time
// if an element is added to the DOM at some point in the future that will match this
// selector pattern, this element will NOT be included in this collection
let allSubListItems = document.querySelectorAll('ul li ul li');
for (i = 0; i < allSubListItems.length; i++) {
  allSubListItems[ i ].classList.add('yellowBackground');
  allSubListItems[ i ].classList.add('thinBorder');
}
