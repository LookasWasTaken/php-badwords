<?php
$phrase = trim($_GET["phrase"]);
$badWords = trim($_GET["badwords"]);
$censored = str_replace($badWords, "***", $phrase);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- EXTERNAL BOOTSTRAP CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Your Data</title>
</head>

<body>
  <div class="container text-center my-5">
    <div class="row">
      <div class="mb-5">
        <h5>Your phrase: <?php echo $phrase; ?></h5>
        <h6>Length: <?php echo strlen($phrase); ?></h6>
      </div>
      <div class="mb-5">
        <h5>The censored phrase is: <?php echo $censored; ?></h5>
        <h6>Length: <?php echo strlen($censored); ?></h6>
      </div>
    </div>
    <a name="newphrase" id="newphrase" class="btn btn-secondary" href="./index.php">New</a>
  </div>
</body>

</html>