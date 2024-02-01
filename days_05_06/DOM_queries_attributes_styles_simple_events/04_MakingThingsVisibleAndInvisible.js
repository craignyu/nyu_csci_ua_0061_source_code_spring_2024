// grab a reference to our images
let elPikachu = document.getElementById('pikachu');
let elCharmander = document.getElementById('charmander');

// grab a reference to our buttons
let elBtnPikachu = document.getElementById('btnPikachu');
let elBtnCharmander = document.getElementById('btnCharmander');

// listen for click events on the button
elBtnPikachu.onclick = function() {
  // get ALL styles associated with this element
  let allPikachuStyles = window.getComputedStyle(elPikachu);

  // determine the current display state of the elPikachu element
  if (allPikachuStyles.display === 'none') {
    // flip the display property
    elPikachu.style.display = 'inline';

    // update text on the button
    elBtnPikachu.innerHTML = 'Hide Pikachu';
  }
  else {
    // flip the display property
    elPikachu.style.display = 'none';

    // update text on the button
    elBtnPikachu.innerHTML = 'Show Pikachu';
  }
}


elBtnCharmander.onclick = function() {
  // get ALL styles associated with this element
  let allCharmanderStyles = window.getComputedStyle(elCharmander);

  // determine the current display state of the elCharmander element
  if (allCharmanderStyles.display === 'none') {
    // flip the display property
    elCharmander.style.display = 'inline';

    // update text on the button
    elBtnCharmander.innerHTML = 'Hide Charmander';
  }
  else {
    // flip the display property
    elCharmander.style.display = 'none';

    // update text on the button
    elBtnCharmander.innerHTML = 'Show Charmander';
  }
}
