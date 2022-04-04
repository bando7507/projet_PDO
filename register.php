<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/composent.css">

</head>
<body>


<section class="form-container">
   <form action="" method="POST">
      <h1>register now</h1>
      <input type="text" name="name" class="box" placeholder="enter your name" require>
      <input type="email" name="email" class="box" placeholder="enter your email" require>
      <input type="password" name="pass" class="box" placeholder="enter your password" require>
      <input type="password" name="cpass" class="box" placeholder="confirm your password" require>
      <input type="file" name="image" class="box" require accept="image/jpg, image/jpeg, image/png"> 
      
      <input type="submit" value="register now" class="btn" name="submit">
   </form>

</section>
</body>
</html>