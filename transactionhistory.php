<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/history.css">
    
</head>

<body>

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

<section class="trans">
	<div class="container">
        <h2>Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</section>
<!-- Footer Start-->
<footer class="text-center mt-5 py-2">
<p>&copy 2021. Made by <b>Devansh Srivastava</b> <br> Intern at The Sparks Foundation</p>
</footer>
<!-- Footer End-->
</body>
</html>