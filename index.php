<?php
// codice PHP
$name = 'Luca';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
  <title>Bad Words</title>
</head>

<body>
  <div class="container d-flex justify-content-center">
    <div class="my-3 card rounded-0 shadow col-8">
      <h1 class="text-center">Hi <?php echo $name; ?></h1>
      <div class="card-body">
        <form action="myscript.php" method="get">
          <div class="mb-3">
            <label for="phrase">Phrase</label>
            <input type="text" name="phrase" id="phrase" class="form-control" placeholder="Phrase" aria-describedby="suffixId">
          </div>
          <div class="mb-3">
            <label for="badwords">Bad Words</label>
            <input type="text" name="badwords" id="badwords" class="form-control" placeholder="Bad Words" aria-describedby="suffixId">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-primary">Reset</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>