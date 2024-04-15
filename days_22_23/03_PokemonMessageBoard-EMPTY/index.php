<!doctype html>
<html>
  <head>
    <title>Web Development</title>
    <style>
      .entry {
        width: 18%;
        height: 200px;
        box-sizing: border-box;
        text-align: center;
        border: 1px solid black;
        border-radius: 20px;
        padding: 10px;
        float: left;
        word-break: break-all;
        overflow: hidden;
        background-color: #eee;
        margin: 1%;
      }
      .entry img {
        display: block;
        margin: auto;
        width: 50%;
      }
    </style>
  </head>
  <body>

    <h1>Pokemon Message Board with AJAX</h1>

    <!-- a form the user can fill out to create a new entry for the page -->
    <div>
      Avatar:
      <select id="pokemon">
        <option value="images/pikachu.png">Pikachu</option>
        <option value="images/charmander.png">Charmander</option>
        <option value="images/bulbasaur.png">Bulbasaur</option>
        <option value="images/squirtle.png">Squirtle</option>
      </select>
    </div>
    <div>
      Message (keep it clean!):
      <input type="text" id="message" maxlength="50">
      <button id="save">Save Message</button>
    </div>

    <hr>

    <!-- where previous entries will be stored -->
    <div id="previous"></div>

    <!-- template for a previous entry:

      <div id="item_id" class="entry">
        <img src="images/pikachu.png">
        <p>Message goes here</p>
      </div>

    -->


    <!-- custom application code -->
    <script>

        // wait until the page is fully ready to go

        // dom refs
        var dropdown = document.getElementById('pokemon');
        var message = document.getElementById('message');
        var saveButton = document.getElementById('save');
        var previous = document.getElementById('previous');

        // TODO implement a function to contact the server and create a new entry 
        saveButton.onclick = function(e) {

        }

        // TODO: implement a function to contact the server and retrieve all previously added messages and display them to the page


        // TODO: call this function once when the pages loads


        // TODO: schedule this function to run regularly to obtain any new entries


        // given: a helper function to create new entries on the client side (DOM mechanics)
        function createEntry(id, img, msg) {
            // create a new 'div' on the page with this ID
            let tempDiv = document.createElement('div');
            tempDiv.id = id;
            tempDiv.classList.add('entry');

            // create an image
            let tempImg = document.createElement('img');
            tempImg.src = img;
            tempDiv.appendChild( tempImg );

            // create a 'p' tag for the message
            let tempP = document.createElement('p');
            tempP.innerHTML = msg;
            tempDiv.appendChild( tempP );

            // add to the 'previous' div at the beginning
            if (previous.children.length == 0) {
                previous.appendChild( tempDiv );
            }
            else {
                previous.insertBefore( tempDiv, previous.firstElementChild );
            }
        }

    </script>

  </body>
</html>
