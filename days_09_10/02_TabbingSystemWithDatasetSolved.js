// get a ref to all .tab elements
let allTabs = document.querySelectorAll('.tab');

// visit each element
for (let i = 0; i < allTabs.length; i++) {
  // have each element listen for mouse clicks
  allTabs[i].onclick = function(event) {
    // when clicked, make the current active tab inactive
    document.querySelector('.active').classList.remove('active');

    // make this tab active
    event.currentTarget.classList.add('active');

    // hide all of the other content panels
    let allContent = document.querySelectorAll('#content div');
    for (let j = 0; j < allContent.length; j++) {
      allContent[j].classList.add('hidden');
    }

    // use our dataset property to figure out which tab should be shown
    let myContentPanel = document.querySelector(event.currentTarget.dataset.mycontentpanel);
    myContentPanel.classList.remove('hidden');
  }
}
