// first, get a ref to all ".tile" elements
const allTiles = document.querySelectorAll('.tile');

// also get refs to each of the three 'slot' boxes
const slot1 = document.getElementById('slot1');
const slot2 = document.getElementById('slot2');
const slot3 = document.getElementById('slot3');

// and get a ref to the 'available' box
const available = document.getElementById('available');

// visit all tile elements
for (let i = 0; i < allTiles.length; i++) {
  // give each tile element a function to run when they are clicked
  allTiles[i].onclick = function(event) {

    // is this image still in the 'available' box?
    if (event.currentTarget.parentElement === available) {
      // move the element into one of the boxes, if they are unoccupied
      if (slot1.children.length === 0) {
        slot1.appendChild( event.currentTarget );
      }
      else if (slot2.children.length === 0) {
        slot2.appendChild( event.currentTarget );
      }
      else if (slot3.children.length === 0) {
        slot3.appendChild( event.currentTarget );
      }
    }

    // otherwise it must in one of the 'assigned' boxes
    else {
      // move the image back into the available box
      event.currentTarget.remove();
      available.appendChild(event.currentTarget);
    }

  }
}
