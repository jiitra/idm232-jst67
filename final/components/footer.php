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
      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste code help wordcount",
      ],
      toolbar: 
        "undo redo | formatselect | " +
        "bold italic backcolor | alignleft aligncenter " +
        "alignright alignjustify | bullist numlist outdent indent | " +
        "removeformat | help",
      content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
    });
  </script>

    <?php echo date ('Y'); ?>
</body>
</html>