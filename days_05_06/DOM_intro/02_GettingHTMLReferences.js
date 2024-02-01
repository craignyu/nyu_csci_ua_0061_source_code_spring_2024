// we can ask JavaScript to search the DOM for elements based
// on a number of criteria:
// * by ID
// * by class
// * by tag name
// * by contextual selector

// if you know the ID of the element you wish to access you can get a
// reference by using the 'getElementById' function
const element1 = document.getElementById('first_a_tag');
console.log(element1);
console.dir(element1);

// next, we can adjust any HTML attributes on this element using
// dot syntax.  for example:
element1.href = 'http://www.nyu.edu';

// we can even add new HTML attributes
element1.target = '_blank';

// you can adjust the CSS styles on this element by using the
// 'style' property
element1.style.color = 'green';
element1.style['font-family'] = 'Fantasy';
element1.style['font-size'] = '200%';
element1.style['text-decoration'] = 'none';

// one method to adjust the text inside of an element is to use the
// 'innerText' property on the element, like this:
element1.innerText = 'Click here to go to NYU';
