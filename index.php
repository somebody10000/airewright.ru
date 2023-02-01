<?php
    $result = explode('/', $_SERVER['REQUEST_URI']);
    switch($result[1]) {
        case '':
            include "page1.html";
            break;
        case '2':
            include "page2.html";
            break;
    } ?>
<html>
  <head>
  <style type="text/css">
  <?php
  include 'C:\wamp64\www\AIrewright.ru\css\style.css';
  ?>
  </style>
    <title>Article Rewriter</title>
    <link rel="import" href="header.html">
  </head>
  <body>
    <header is="header-element"></header>
    <h1>Article Rewriter</h1>
    <form>
    <label for="original-article">Original Article:</label>
    <textarea id="original-article"></textarea>
    <br><br>
    <button id="rewrite-button" type="button">Rewrite</button>
    <br><br>
    <label for="rewritten-article">Rewritten Article:</label>
    <textarea id="rewritten-article"></textarea>
    </form>
    <script>
    // Add your script here
    //  jQuery is not necessary in this case 
    document.querySelector("#rewrite-button").addEventListener("click", function() {
    // API calls to GPT-3 and Deepl API would go here
    // Use the responses to update the text in the "Rewritten Article" textarea
    });
    </script>
  </body>
</html>