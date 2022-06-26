<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikhsan Computer Store</title>
    <link rel="stylesheet" href="style22.css">
    <link rel="stylesheet" href="page/beranda2.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="dashboard">
  <div class="left-side-bar">
    <div class="menu">
        <nav>
      <ul>
      <?php include("page/navbar.php") ?>
      </ul>
      </nav>
    </div>
  </div>
  <div class="main-container">
    <div class="top-bar">
      <div class="search-input">
        <i class="fa fa-search"></i>
        <input placeholder="Search...">
      </div>
      <div class="top-bar-btn">
        <i class="fa fa-bell"></i>
      </div>
     
      <img src="img/12050113500.jpg" style="border-radius: 50%;">
      <div class="top-bar-profile">
        <p>Hallo <b><?php echo $_SESSION['username'];?>.</p>
        <i class="fa fa-angle-down"></i>
      </div>
    </div>
    <?php include("content.php") ?>
  </div>
</div>

</body>
</html>