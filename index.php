<html>
  <head>
    <title>AI Rewriter</title>
    <style>
  	h1 {
        text-align: center;
      }
      form {
        width: 80%;
        margin: 0 auto;
        text-align: center;
      }
      #original-article, #rewritten-article {
        width: 100%;
        height: 150px;
        margin-bottom: 20px;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
      }
      #rewrite-button {
        padding: 10px 20px;
        background-color: #40A0B0;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
      }
      #rewrite-button:hover {
        background-color: #235F67;
      }
	textarea {
        height: 150px;
        width: 100%;
        max-height: 150px;
        max-width: 100%;
        resize: none;
        margin-bottom: 20px;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem; 
	}
    </style>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <h1>AI article rewriter</h1>
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