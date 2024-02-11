// get a reference to all of the right arrow elements on the page
const allRightArrows = document.querySelectorAll('.arrowright');

// visit all of these elements
for (let i = 0; i < allRightArrows.length; i++) {
  // tell each of these elements to listen for clicks
  allRightArrows[i].onclick = function(event) {

    // now we need to see where we fall in this child list
    // the right arrow needs to figure out which tile it lives in
    // we can do this using DOM nodes
    const myTile = event.currentTarget.parentElement.parentElement;

    // now we need to find the tile directly to our right
    const tileToTheRight = myTile.nextElementSibling;

    // if we are not the last tile we can move
    if (tileToTheRight.classList.contains('tile')) {
      myTile.parentElement.insertBefore(tileToTheRight, myTile);
    }
  }
}


// same for the left arrows
// get a reference to all of the left arrow elements on the page
let allLeftArrows = document.querySelectorAll('.arrowleft');

// visit all of these elements
for (let i = 0; i < allLeftArrows.length; i++) {
  // tell each of these elements to listen for clicks
  allLeftArrows[i].onclick = function(event) {

    // now we need to see where we fall in this child list
    // the left arrow needs to figure out which tile it lives in
    // we can do this using DOM nodes
    const myTile = event.currentTarget.parentElement.parentElement;

    // now we need to find the tile directly to our left
    const tileToTheLeft = myTile.previousElementSibling;

    // if we are not the first tile we can move
    if (tileToTheLeft != null) {
      myTile.parentElement.insertBefore(myTile, tileToTheLeft);
    }

  }
}
