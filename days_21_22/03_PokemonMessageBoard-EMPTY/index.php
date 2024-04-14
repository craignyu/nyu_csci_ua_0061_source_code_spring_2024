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


    <!-- bring in the jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- custom application code -->
    <script>

      // when jQuery & the page are ready to go
      $(document).ready(function() {

        // dom refs
        var dropdown = document.getElementById('pokemon');
        var message = document.getElementById('message');
        var saveButton = document.getElementById('save');
        var previous = document.getElementById('previous');



      })

    </script>

  </body>
</html>
