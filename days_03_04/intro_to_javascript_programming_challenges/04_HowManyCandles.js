// ask the user how old they are
let age = parseInt(prompt("How old are you? (i.e. 18): "));

// is the result not a number (NaN) or less than 0
if (isNaN(age) == true || age <= 0) {
  document.write('<p>Not a valid number!');
}

// it's good!
else {
  // set up a 'for' loop to go from 0 to their age
  for (let i = 0; i < age; i++) {

    // generate the same candle for each year
    //document.write('<img src="images/candle1.png">');

    // or pick random candles
    let chance = parseInt( Math.random() * 3 );
    if (chance == 0) {
      document.write('<img src="images/candle1.png">');
    }
    else if (chance == 1) {
      document.write('<img src="images/candle2.png">');
    }
    else {
      document.write('<img src="images/candle3.png">');
    }
  }
}
