// the 'var', 'let' and 'const' keywords can be used to declare a variable
var myVariable1a;
let myVariable1b;
const myVariable1c;

// if you inspect the value of these variable you will
// see that they are 'undefined' - we haven't assigned any
// value to the variables yet
console.log(myVariable1a);
console.log(myVariable1b);
console.log(myVariable1c);

// you can use the assignment operator to store a value
// refernce in a variable
myVariable1a = 'hello, world';

// now we can see its value
console.log(myVariable1a);

// the 'var' keyword is used to declare a variable that is bound to a function
// - if the variable is not declared inside of a function block the variable is globally scoped
// the 'let' keyword is used to declare a variable that is bound to a block of execution
// - i.e. inside of an 'if' statement; if used outside of a block the variable is globally scoped
// the 'const' keyword is used to declare a read-only binding.  Once the variable is initialized
// - the binding can not be changed.  for immutable data types like numbers and strings this essentially
// - means that the variable is 'read only'


// you can do this all on one line of code:
let myVariable2 = 'one line variable declaration & initilization';
console.log(myVariable2);

// in general, use the 'let' keyword to declare your variables

// JavaScript supports 4 primitive data types
// string, number, boolean and Object
// you can use the 'typeof' function to determine the data type of a variable
let a = 5;
let b = 5.7;
let c = "hello";
let d = true;
console.log(a, typeof(a));
console.log(b, typeof(b));
console.log(c, typeof(c));
console.log(d, typeof(d));

// you can ask the user to supply a string using the 'prompt' function
// (we will go over better ways to do this when we cover HTML forms & JavaScript!)
let answer = prompt("What is 2 + 2?");
document.write("<p>You answered: " + answer + "</p>");

// you can change the data type of a variable using one of the following
// data type conversion functions

// string -> number (integer)
let converted1 = parseInt("5");
console.log(converted1, typeof(converted1));

// number (float) -> number (integer)
let converted2 = parseInt(5.7);
console.log(converted2, typeof(converted2));

// string -> number (float)
let converted3 = parseFloat("5.7");
console.log(converted3, typeof(converted3));

// number -> string
// method 1 - use the toString() method
let converted4 = a.toString();
console.log(converted4, typeof(converted4));

// method 2 - use concatenation
let converted5 = a + "";
console.log(converted5, typeof(converted5));
