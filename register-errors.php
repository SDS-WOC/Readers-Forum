
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
</head>
<body>
<?php

if (count($errors_2) > 0): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors_2 as $error_2) : ?>
        <p align="left"><?php echo $error_2; ?> </p>
        <?php endforeach ?>
    </div>
<?php endif ?>
</body>
</html>
