// visit all images in the 'container' div
let allImages = document.querySelectorAll('#container img');

for (let i = 0; i < allImages.length; i++) {
  // have each one listen for when the mouse is over them
  allImages[i].onmouseover = function(event) {
    // switch our 'src' attribute when the mouse is hovering
    event.currentTarget.src = event.currentTarget.dataset.rolloverimage;
  }
  // have them also listen for when the mouse leaves their area
  allImages[i].onmouseout = function(event) {
    // switch the 'src' attribute back
    event.currentTarget.src = event.currentTarget.dataset.normalimage;
  }
}
