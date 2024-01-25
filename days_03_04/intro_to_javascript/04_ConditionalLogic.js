// some variables to work with
let a = 5;
let b = 10;

// one-way 'if' statement
if (b > a) {
  console.log("1: " + b + ">" + a);
}

// two-way 'if' statement
if (a > b) {
  console.log("2: " + a + ">" + b);
}
else {
  console.log("2: else!");
}

// if / else if / else structure
if (a > b) {
  console.log("3: " + a + ">" + b);
}
else if (a*2 === b) {
  console.log("3: " + a*2 + "==" + b);
}
else {
  console.log("3: else!");
}


// equality operator (==) vs identity operator (===)
let c = 5;
let d = "5";

if (c == d) {
  console.log ("c == d");
}

if (c === d) {
  console.log ("c == d");
}
