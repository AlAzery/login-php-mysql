<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil/<?php echo $_SESSION['username'];?></title>
</head>
<body>
    <h1>
      Selamat datang <span style="color: blue;"><?php echo $_SESSION['username'];?></span>
    </h1>
    <a href="logout.php">logout</a>
</body>
</html>
