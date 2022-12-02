<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IDM232 Assignment 01</title>
    <link rel="stylesheet" href="reset.css"/>
    <link rel="stylesheet" href="styles.css"/>
</head>

<body>
    <script src="main.js"></script>

    <script>
    tinymce.init({
      selector: 'textarea',
      menubar: false,
      plugins:
      "anchor autolink  codesample  link lists searchreplace table visualblocks wordcount",
    toolbar:
      "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent |   removeformat",
    content_style:
      "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
    });
  </script>

<p class="centered" style="margin-bottom: 4rem; margin-top: 2rem;">
Visions of Sugarplums | Jillian Tracy &copy<?php echo date ('Y'); ?>
<p>

</body>
</html>