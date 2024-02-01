// define the function that will be run when the 2nd div is clicked
function doInlineEvent() {
  alert("The doInlineEvent function was called");
}

// get a reference to the element with the ID of 'three'
const elThree = document.getElementById('three');

// tell this element to set up an event listener for when the user
// clicks on it. this method is preferred over setting up inline listeners
elThree.onclick = function() {
  alert("This was set up in the external JS file");
}
