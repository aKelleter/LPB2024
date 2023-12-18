<?php

$passHashed = null;
$passToHash = null;

if(!empty($_POST["passToHash"]))
{
   //echo 'Form sended<br>';
    $options = [
      'cost' => 10      
  ];
  $passToHash = $_POST["passToHash"];
  $passHashed = password_hash($passToHash, PASSWORD_DEFAULT, $options);
}  
?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css" integrity="sha512-4xo8blKMVCiXpTaLzQSLSw3KFOVPWhm/TRtuPVc4WG6kUgjH6J03IBuG7JZPkcWMxJ5huwaBpOpnwYElP/m6wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PASSWORD HASHER</title>

    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" style="width:60%; margin: auto;">    
        <h2 class="title">PASSWORD HASHER</h2>
        <hr>      

        <form action="" method="post"> 
          <div class="form-ctrl">
            <label  class="form-ctrl" for="passToHash">Password hasher</label>
            <input type="input" class="form-ctrl" id="passToHash" name="passToHash">
          </div>

          <?php     
            if(isset($passHashed))
            {
              echo '<p class="">Password before hash: '.$passToHash.' </p>';
              echo '<div class="form-ctrl">';
                echo '<label class="form-ctrl">Password after hash : </label>';
                echo '<input id="hash-pwd" class="form-ctrl" value="'.$passHashed.'"  disabled>';
                echo '</form>';
                echo '<button class="btn-classic" href="index.php">Reload</button>'; 
                echo '<a class="btn-classic" id="copy-hash">Copy</a>';              
                echo '<p id="info"></p>';
              echo '</div>';
            }else{
              echo '<button type="submit" class="btn-classic">Hash the password</button>';
              echo '</form>';
            }
          ?>    
          <footer>
            <p class="footer"> v1.0.0 by HAL 9000</p>
          </footer>         
    </div> 
    <script src="hash.js"></script> 
  </body>
</html>

