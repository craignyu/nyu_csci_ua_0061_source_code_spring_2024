// this is the whole browser window object (the ENTIRE DOM)
console.log(window);

// this is just the document portion of the DOM
// (where we will be spending most of our time)
console.log(window.document);

// we use this all the time so you can just shortcut
// your reference to 'document' rather than 'window.document'
console.log(document);

// just to prove that they are the same object!
console.log(window.document === document);  // true

// the default representation of the DOM is an HTML tree
// you can view it as an Object by using console.dir
console.dir(document);
