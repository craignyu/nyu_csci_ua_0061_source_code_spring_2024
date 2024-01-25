// set up an object to hold all of our results
// note: we could do this with individual variables and arrays too
//       this is just one approach!!!
let results = {
  total: 0,
  1: 0,
  2: 0,
  3: 0,
  4: 0,
  5: 0,
  6: 0,
  snakeEyes: 0,
  doubles: 0
};

// figure out what time it is
let today = new Date();
let hour = today.getHours();
if (hour > 6 && hour < 12) {
  document.write('<h3>Good Morning!</h3>');
}
else if (hour >= 12 && hour < 18) {
  document.write('<h3>Good Afternoon!</h3>');
}
else {
  document.write('<h3>Good Night!</h3>');
}

// loop 100 times
for (let i = 0; i < 100; i++) {
  // generate a random number between 1 and 6
  let roll1 = parseInt( Math.random() * 6 + 1 );
  let roll2 = parseInt( Math.random() * 6 + 1 );

  // update total
  results.total += roll1;
  results.total += roll2;

  // update the appropriate counters
  results[ roll1 ] += 1;
  results[ roll2 ] += 1;

  // does this count as doubles?
  if (roll1 === roll2) {
    results.doubles += 1;

    // does this count as snakeeyes?
    if (roll1 === 1) {
      results.snakeEyes += 1;
    }
  }

  // generate the correct image filename
  let filename1 = 'images/dice-' + roll1 + '.png';
  let filename2 = 'images/dice-' + roll2 + '.png';

  // write this image to the document
  document.write('<div>');
  document.write('<img src="' + filename1 + '">');
  document.write('<img src="' + filename2 + '">');
  document.write('</div>');
}

// write results to the document
document.write('<p>Total value of all rolls: ' + results.total + '</p>');
document.write('<p># of double rolls: ' + results.doubles + '</p>');
document.write('<p># of snake eyes rolls: ' + results.snakeEyes + '</p>');
