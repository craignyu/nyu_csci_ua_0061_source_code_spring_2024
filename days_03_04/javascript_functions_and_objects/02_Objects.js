// an object is one of the fundamental data types in JavaScript
// it is a sequence structure (like an array) that has the ability to hold
// multiple values within the same identifier
// it can be defined using curly braces
let testObject1 = {};

// objects can contain any number of named PROPERTIES
// a property can be of any data type, including other objects
let testObject2 = {
  name:'Pikachu',
  age:6,
  powers:['thunder','shock']
};

// properties can be accessed through DOT NOTATION
console.log( testObject2.name );  // Pikachu
console.log( testObject2.age );   // 6
console.log( testObject2.powers[0]);  // thunder

// they can also be accessed using INDEX NOTATION
console.log( testObject2['name'] ); // Pikachu
console.log( testObject2['age'] );  // 6
console.log( testObject2['powers'][0] );  // thunder

// attempting to access a property that doesn't exist will result in an 'undefined' value
console.log( testObject2['foo']); // undefined

// objects are MUTABLE and properties can be changed after they have been defined
testObject2.age = 7;
console.log( testObject2.age );   // 7

// objects are EXTENSIBLE - you can add new properties to an object at any time
testObject2.bestFriend = 'Charmander';

// you can inspect an entire object by outputting the object itself to the console
console.log( testObject2 );

// you can remove properties from an object as well
delete testObject2.bestFriend;
console.log( testObject2 );

// you can iterate over all properties in a function using a 'for' loop
for (let property in testObject2) {
  console.log(property + " has a value of " + testObject2[property]);
}

// objects can also contain FUNCTIONS as properties
testObject2.sayHi = function() {
  console.log("Pika Pika!");
}
testObject2.sayHi(); // Pika Pika!

// functions stored within objects can access OTHER PROPERTIES using the 'this' keyword
testObject2.whoAmI = function() {
  console.log("My name is " + this.name);
}
testObject2.whoAmI(); // My name is Pikachu
