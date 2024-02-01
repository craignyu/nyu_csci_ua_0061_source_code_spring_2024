// grab a reference to the element that we will be attaching events to
const elBox = document.getElementById('box');

// grab a reference to the 'history' panel
const elHistory = document.getElementById('history');

// attach a series of mouse events to this element
// each of these events will update the 'history' panel
elBox.onclick = function() {
  elHistory.innerText += 'clicked\n';
}
elBox.ondblclick = function() {
  elHistory.innerText += 'double clicked\n';
}
elBox.onmousedown = function() {
  elHistory.innerText += 'mouse down\n';
}
elBox.onmouseup = function() {
  elHistory.innerText += 'mouse up\n';
}
elBox.onmouseover = function() {
  elHistory.innerText += 'mouse over\n';
}
elBox.onmouseout = function() {
  elHistory.innerText += 'mouse out\n';
}
