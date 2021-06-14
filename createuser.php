<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/createuser.css">
    <title>Create User</title>
</head>
<body>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<!-- Start of Nav-->
<nav>
  <input id="nav-toggle" type="checkbox">
<div class="logo"><strong>DS Bank</strong></div>
<ul class="links">
<li><a href="index.html">Home</a></li>
  <li><a href="createuser.php">Create User</a></li>
  <li><a href="transfermoney.php">Transfer</a></li>
  <li><a href="transactionhistory.php">History</a></li>
</ul>
<label for="nav-toggle" class="icon-burger">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</label>
</nav>

<!-- End of Nav-->


<!-- Form -->
<section class="container">  
  <form id="contact" action="" method="post">
    <h3>Create A User</h3>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2"  name="email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Balance" type="number" tabindex="3"  name="balance"  required>
    </fieldset>
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" value="CREATE">Submit</button>
    </fieldset>
    
  </form>
</section>
<!-- Footer Start-->
<footer class="text-center mt-5 py-2">
  <p>&copy 2021. Made by <b>Devansh Srivastava</b> <br> Intern at The Sparks Foundation</p>
  </footer>
  <!-- Footer End-->

    </body>
</html> 