// an array is a sequence object, just like a list in Python
let myArray = ['apple', 'pear', 'peach'];

// display the whole array as an inspectable tree
console.log(myArray);

// display just the first element in the array
console.log(myArray[0]);

// display the total # of elements in the array
console.log(myArray.length);

// add two new elements into the array (at the end of the array)
myArray.push('grapefruit');
myArray.push('lemon');

// remove 1 element from the array, starting at the 2nd position
myArray.splice(2, 1);

// visit each position in the array and print out
// each element in its own <div>
for (let i = 0; i < myArray.length; i++) {
  document.write('<div>' + myArray[i] + '</div>');
}
