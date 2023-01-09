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
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 100px 0;
    max-width: 1000px;
    margin: 0 auto;
    background-color: black;
    color: white;
  }

  h1, p, div{
    margin-bottom: 30px;
  }

  h1{
    color: red;
  }

  div{
    color: green;
  }

</style>
</html>