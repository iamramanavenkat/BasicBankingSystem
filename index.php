<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Bank of INFO TECHNICIANS</title>
  </head>

  <body>
  <div class="loginbox">
    <h3 style="text-align: center;font-family: sans-serif;">Welcome to Bank of INFO TECHNICIANS</h3><br>
    <form method="POST" action="users.php">
      <input type="submit" name="save" value="Money Transfer">
    </form><br><br>
    <form method="POST" action="transaction.php">
      <input type="submit" name="save" value="View History">
    </form>
    </div>
    
  <header>
  <?php
  include 'navbar.php';
  ?></header>
<main>
  <style>
  body{
    background-image: url('Bank.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    width: 100%;
    height: 100%;
     background-size: cover;
    
  }
</style>

    </main>
  </body>
</html>