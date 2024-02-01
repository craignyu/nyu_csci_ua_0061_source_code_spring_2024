// grab references to our tabs
const elTabAbout = document.getElementById('tabAbout');
const elTabContact = document.getElementById('tabContact');

// grab references to our content windows
const elContentAbout = document.getElementById('contentAbout');
const elContentContact = document.getElementById('contentContact');

// attach listeners to each button
elTabAbout.onclick = function() {
  // swap visiblity of our two tabs
  elContentAbout.style.display = 'block';
  elContentContact.style.display = 'none';

  // change the border width of the tabs to show visually which tab is selected
  elTabAbout.style['border-width'] = '2px';
  elTabContact.style['border-width'] = '1px';
}

elTabContact.onclick = function() {
  // swap visiblity of our two tabs
  elContentAbout.style.display = 'none';
  elContentContact.style.display = 'block';

  // change the border width of the tabs to show visually which tab is selected
  elTabAbout.style['border-width'] = '1px';
  elTabContact.style['border-width'] = '2px';
}
