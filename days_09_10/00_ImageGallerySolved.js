// set up listeners for each 'img' tag inside the 'container' div
let allImgTags = document.querySelectorAll('#container img');
for (let i = 0; i < allImgTags.length; i++) {

  // when the mouse clicks on the image
  allImgTags[i].onclick = function(event) {
    // when an image is hovered over, grab its 'data-info' property
    // and write it to the 'results' div
    let info = event.currentTarget.dataset.info;
    document.getElementById('caption').innerHTML = info;

    // also set up a counter to keep track of how many times
    // this image has been 'touched' by the user

    // is this the first time the image has been clicked? if so, set up a new
    // data-counter attribute on the element
    if (event.currentTarget.dataset.counter === undefined) {
      event.currentTarget.dataset.counter = 1;
    }

    // otherwise update the element
    else {
      event.currentTarget.dataset.counter = parseInt(event.currentTarget.dataset.counter)+1;
    }
    document.getElementById('counter').innerHTML = 'You have clicked on this image ' + event.currentTarget.dataset.counter + ' times!';

    // remove any children in the bigimage container, if necessary
    while (document.getElementById('bigimage').children.length > 0) {
      document.getElementById('bigimage').removeChild(document.getElementById('bigimage').children[0]);
    }

    // update the 'bigimage' div with a large version of this image
    let temp = document.createElement('img');
    temp.src = event.currentTarget.dataset.bigimage;
    document.getElementById('bigimage').appendChild(temp);
  }
}
