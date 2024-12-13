<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script src="app.js" defer></script>
  </head>
  <body>
    <h1>PHP Content</h1>
<p>This HTML will get delivered as is</p>
<?php echo 
"<p>But this code is interpreted by PHP and turned into HTML</p>",
"<ul><li>You can use any HTML tags,</li><li>like this list.</li></ul>",
"closing tags aren't needed, neither are the HTML tags",
"<footer>",
  "<p>Seperate the elements with commas</p>",
"</footer>";
// this is a php comment
/* This is a multi-line php comment
line 2
line 3 */ 
?>
  </body>
</html>
