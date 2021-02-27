<html>
    <head>
        <link rel="stylesheet" href="CSS/all.min.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <?php
            $userData = [
              [
                 'name' => 'ahmed hamdy',
                 'job' => 'front-end',
                 'experience' => 3
              ],
              [
                  'name' => 'mohammed shaker',
                  'job' => 'back-end',
                  'experience' => 2
             ],
             [
                 'name' => 'ali hasan',
                 'job' => 'full-stack',
                 'experience' => 4
             ],
           ];
        ?>

<div class="d-flex justify-content-around">
<div class="card mb-5" style="width: 18rem;">
  <div class="card-body">
     
    <h5 class="card-title"><?php echo $userData[0]["name"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData[0]["job"];?></h6>
    <p class="card-text"><?php echo $userData[0]["experience"];?> years of experience</p>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <div class="card-body">
     
    <h5 class="card-title"><?php echo $userData[1]["name"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData[1]["job"];?></h6>
    <p class="card-text"><?php echo $userData[1]["experience"];?> years of experience</p>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <div class="card-body">
     
    <h5 class="card-title"><?php echo $userData[2]["name"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData[2]["job"];?></h6>
    <p class="card-text"><?php echo $userData[2]["experience"];?> years of experience</p>
  </div>
</div>
</div>



    </body>
</html>