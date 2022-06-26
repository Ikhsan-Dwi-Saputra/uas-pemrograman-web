<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Ikhsan Computer Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style33.css">
  <link rel="stylesheet" href="style44.css">
  </head>
  <body>
  <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
      </div>
    
      <div class="container">
        <!-- Nav -->
        <nav class="main-nav">
       <p style="border: 1px black solid; padding: 10px; font-size: 20px;">Ikhsan Computer Store</p>
    
          <ul class="main-menu">
          <?php include("page/navbar.php") ?> 
          </ul>
    
          <ul class="right-menu">
            <li>
              <a href="#">
                <i class="fas fa-search" style="font-size: 25px"></i>
              </a>
            </li>
            <li>
              <a href="?page=cek.php">
                <i class="fas fa-shopping-cart" style="font-size: 25px"></i>
              </a>
            </li>
          </ul>
        </nav>
<!--  -->
<?php
  if (isset ($_SESSION['username']) == ""){ ?>
    <div class="pesan d-flex align-items-center">
      <p>Masuk / Daftar, untuk mendapatkan promo hingga 45% untuk pengguna baru!</p>
      <a href="page/daftar.php" class="tombol-biruk">Daftar Sekarang</a></p>
    </div>
  <?php } ?>
        <!--  -->
        <header class="showcase">
      <h2>kemudahan dalam keindahan</h2>
      <p>Berkerja dengan mudah dan tenang, pilih produk terbaik kami sekarang
      </p>
      <a href="#" class="btn">
        Belanja Sekarang <i class="fas fa-chevron-right"></i>
      </a>
    </header>

      <!-- Home cards 1 -->
      <?php include("content.php") ?>

    <!-- Xbox -->
    <section class="xbox">
      <div class="content">
        <h2>Xbox Game Pass Ultimate</h2>
        <p>Xbox Game Pass Ultimate Xbox Live Gold and over 100 high-quality
          console and PC games. Play together with friends and discover your
          next favorite game.</p>
          <a href="#" class="btn">
            Join Now <i class="fas fa-chevron-right"></i>
          </a>
      </div>
    </section>

    <!-- Home cards 2 -->
			<section class="home-cards">
				<div>
					<img src="https://i.ibb.co/zVqhWn2/card5.png" alt="" />
					<h3>Ikhsan Computer Store Teams</h3>
					<p>
						Unleash the power of your team.
					</p>
					<a href="#">Shop Now <i class="fas fa-chevron-right"></i></a>
				</div>
				<div>
					<img src="https://i.ibb.co/mGZcxcn/card6.jpg" alt="" />
					<h3>Unlock the power of learning</h3>
					<p>
						Get students future-ready with Windows 10 devices. Starting at $219.
					</p>
					<a href="#">Shop Now <i class="fas fa-chevron-right"></i></a>
				</div>
				<div>
					<img src="https://i.ibb.co/NpPvVHj/card7.png" alt="" />
					<h3>Windows 10 Enterprise</h3>
					<p>
						Download the free 90-day evaluation for IT professionals.
					</p>
					<a href="#">Download Now <i class="fas fa-chevron-right"></i></a>
				</div>
				<div>
					<img src="https://i.ibb.co/LkP4L5T/card8.png" alt="" />
					<h3>Explore Kubernetes</h3>
					<p>
						Learn how Kubernetes works and get started with cloud native app
						development today.
					</p>
					<a href="#">Get Started <i class="fas fa-chevron-right"></i></a>
				</div>
      </section>
      
      <!-- Carbon -->
      <section class="carbon dark">
        <div class="content">
          <h2>Commiting To Carbon Negative</h2>
          <p> Ikhsan Computer Store will be carbon negative by 2030 and by 2050 we will remove
            all carbon the company has emitted since it was founded in 1975</p>
            <a href="#" class="btn">
              Learn More <i class="fas fa-chevron-right"></i>
            </a>
        </div>
      </section>

      <!-- Follow -->
      <section class="follow">
        <p>Follow Ikhsan Computer Store</p>
        <a href="https://facebook.com">
          <img src="https://i.ibb.co/LrVMXNR/social-fb.png" alt="Facebook">
        </a>
        <a href="https://twitter.com">
          <img src="https://i.ibb.co/vJvbLwm/social-twitter.png" alt="Twitter">
        </a>
        <a href="https://linkedin.com">
          <img src="https://i.ibb.co/b30HMhR/social-linkedin.png" alt="Linkedin">
        </a>
      </section>
    </div>
      <!-- Links -->
      <section class="links">
        <div class="links-inner">
          <ul>
            <li><h3>What's New</h3></li>
            <li><a href="#">Surface Pro X</a></li>
            <li><a href="#">Surface Laptop 3</a></li>
            <li><a href="#">Surface Pro 7</a></li>
            <li><a href="#">Windows 10 apps</a></li>
            <li><a href="#">Office apps</a></li>
          </ul>
          <ul>
            <li><h3>Ikhsan Computer Store</h3></li>
            <li><a href="#">Account Profile</a></li>
            <li><a href="#">Download Center</a></li>
            <li><a href="#">Ikhsan Computer Store support</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Older tracking</a></li>
          </ul>
          <ul>
            <li><h3>Education</h3></li>
            <li><a href="#">Microsfot in education</a></li>
            <li><a href="#">Office for students</a></li>
            <li><a href="#">Office 365 for schools</a></li>
            <li><a href="#">Deals for studentss</a></li>
            <li><a href="#">Microsfot Azure</a></li>
          </ul>
          <ul>
            <li><h3>Enterprise</h3></li>
            <li><a href="#">Azure</a></li>
            <li><a href="#">AppSource</a></li>
            <li><a href="#">Automotive</a></li>
            <li><a href="#">Government</a></li>
            <li><a href="#">Healthcare</a></li>
          </ul>
          <ul>
            <li><h3>Developer</h3></li>
            <li><a href="#">Visual Studio</a></li>
            <li><a href="#">Windowszs Dev Center</a></li>
            <li><a href="#">Developer Network</a></li>
            <li><a href="#">TechNet</a></li>
            <li><a href="#">Ikhsan Computer Store Developer</a></li>
          </ul>
          <ul>
            <li><h3>Company</h3></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">About Ikhsan Computer Store</a></li>
            <li><a href="#">Company news</a></li>
            <li><a href="#">Privacy at Ikhsan Computer Store</a></li>
            <li><a href="#">Inverstors</a></li>
          </ul>
        </div>
      </section>

      <!-- Footer -->
      <footer class="footer">
        <div class="footer-inner">
          <div><i class="fas fa-globe fa-2x"></i> English (United States)</div>
          <ul>
            <li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact Ikhsan Computer Store</a></li>
					<li><a href="#">Privacy & cookies</a></li>
					<li><a href="#">Terms of use</a></li>
					<li><a href="#">Trademarks</a></li>
					<li><a href="#">Safety & eco</a></li>
					<li><a href="#">About our ads</a></li>
					<li><a href="#">&copy; Ikhsan Computer Store 2020</a></li>
          </ul>
        </div>
      </footer>
  </body>
</html>