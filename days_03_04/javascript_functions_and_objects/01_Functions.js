// defining a 'named function'
function fun1() {
  document.write("<p>Fun 1 was called</p>");
}

// calling a 'named function'
fun1();

// note that 'named functions' are 'hoisted' - JavaScript will automatically scan your code
// and make all named functions available at the beginning of your script.  this means
// that you can effectively call a function before it is defined, like this:
fun2();

// define a 'named function'
function fun2() {
  document.write("<p>Fun 2 was called</p>");
}





// functions can accept arguments just as in other languages
function addTwoNumbers(a,b) {
  document.write("<p>Answer is: " + (a+b) + "</p>");
}

addTwoNumbers(5,10);





// functions can return values as well, just as in other languages
function subtractTwoNumbers(a,b) {
  let answer = a - b;
  return answer;
}

let difference = subtractTwoNumbers(10, 5);
document.write("<p>The difference is: " + difference + "</p>");

// function 'references' can be stored in variables.  in the following example
// the variables 'q' and 'r' both refer to the 'fun2' function.  note how we
// omit the parenthesis - we don't need them because we aren't calling the function
let q = fun2;
let r = fun2;

// now we can call 'q' and 'r', but really we are just calling 'fun2'
q();
r();





// you can also create 'anonymous' functions - these functions are 'unnamed' and are
// stored directly in a variable reference
let anon1 = function() {
  document.write("<p>I'm anonymous 1!</p>");
}

// you can call an anonymous function just like a 'named' function
anon1();

// anonymous functions are not 'hoisted' like named functions.  the following code
// would cause the program to crash
/*
anon2();

let anon2 = function() {
  document.write("<p>I'm anonymous 2!</p>");
}
*/
