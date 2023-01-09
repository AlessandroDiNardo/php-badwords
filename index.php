<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
  <?php
    $title = "First PHP exercise";
    echo $title;
  ?>
</h1>

<p>
  <?php
    $lorem = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptas soluta quas, necessitatibus animi dolorem minus ea ab quaerat aliquam dolorum veniam impedit rem alias veritatis nemo vel? Velit, inventore!";
    echo $lorem ;
  ?>
</p>

<div>
  <?php
    echo "La lunghezza è " . strlen($lorem) . " caratteri";
  ?>
</div>

<p>
  <?php
    $censor = $_GET['word'];
    echo $newString =  str_replace($censor, "***", $lorem);
  ?>
</p>

<div>
  <?php
    echo "La lunghezza è " . strlen($newString) . " caratteri";
  ?>
</div>
</body>
</html>