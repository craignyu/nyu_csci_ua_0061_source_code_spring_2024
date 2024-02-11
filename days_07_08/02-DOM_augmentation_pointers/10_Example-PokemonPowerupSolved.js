// get all '.tile' divs
const allTiles = document.getElementsByClassName('tile');

// visit all '.tile' divs
for (let i = 0; i < allTiles.length; i++) {

  // set up a click handler on all '.tile' divs
  allTiles[i].onclick = function(event) {

    // get a refernce to the element with the 'power' class
    // inside of this div
    const powerDiv = event.currentTarget.querySelector('.power');

    // extract the current power value
    let currentPower = parseInt( powerDiv.innerHTML );

    // increase power
    currentPower += 1;

    // update power
    powerDiv.innerHTML = currentPower;
  }
}
