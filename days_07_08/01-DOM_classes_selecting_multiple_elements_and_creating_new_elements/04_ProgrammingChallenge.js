// grab references to each of our tabs
const tabWelcome = document.getElementById('tabWelcome');
const tabTraditional = document.getElementById('tabTraditional');
const tabGlazed = document.getElementById('tabGlazed');

// grab references to each content panel
const contentWelcome = document.getElementById('contentWelcome');
const contentTraditional = document.getElementById('contentTraditional');
const contentGlazed = document.getElementById('contentGlazed');

// set up click handlers to let the user click on each tab
// this tab is set up in a straight-forward way, hard-coded way
// the other tabs are set up using some tricks to make the process a little easier
tabWelcome.onclick = function() {
  // first, make this tab our 'active' tab by applying the 'active' class to it
  tabWelcome.classList.add('active');

  // remove the 'active' class from the other tabs
  tabTraditional.classList.remove('active');
  tabGlazed.classList.remove('active');

  // show the content associated with this tab
  contentWelcome.classList.remove('hidden');

  // hide the other two tabs
  contentTraditional.classList.add('hidden');
  contentGlazed.classList.add('hidden');
}


tabTraditional.onclick = function() {

  // remove the highlighting from whichever tab is currently selected
  // (fancy way using chaining!)
  document.querySelector('.active').classList.remove('active');

  // or you could use a fancy 'helper function' to do this (see below)
  deactivateAllTabs();

  // set this as our active tab
  tabTraditional.classList.add('active');

  // hide all content panels (using a helper function)
  hideAllContent();

  // show this content panel
  contentTraditional.classList.remove('hidden');
}


tabGlazed.onclick = function() {
  deactivateAllTabs();
  tabGlazed.classList.add('active');
  hideAllContent();
  contentGlazed.classList.remove('hidden');
}



// HELPER FUNCTIONS!

// function to deativate all tabs
function deactivateAllTabs() {
  // get a reference to all tabs
  const allTabs = document.querySelectorAll('.tab');

  // visit each tabs and remove the 'active' class on each one
  for (let i = 0; i < allTabs.length; i++) {
    allTabs[i].classList.remove('active');
  }
}

// function to hide all content windows
function hideAllContent() {
  // get a reference to all content panels
  const allContent = document.querySeletorAll('.content');

  // visit each content panel and add the 'hidden' class
  for (let i = 0; i < allContent.length; i++) {
    allContent[i].classList.add('hidden');
  }
}
