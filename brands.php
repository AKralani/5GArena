<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5GArena</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">
	
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="index.html" class="text-gray">5GArena</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="brands.php">Brands</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Archive</a>
                    </li>
                    <li class="nav-link">
                        <a href="about.html">About Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!------------------------ Site Title ---------------------->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>SmartPhones & Tablets</h3>
                <h1>Brands</h1>
                <!--<button class="btn">Explore</button>-->
				<button onclick="location.href='brands.php'" 
								type="button" class="btn">Explore</button>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-1.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Samsung Galaxy Note20 & Ultra</h3>
                                <!--<button class="btn btn-blog">Samsung</button>
								<button onclick="location.href='https://www.samsung.com/global/galaxy/galaxy-note20/'" 
								type="button" class="btn btn-blog">Samsung</button>-->
								<!-- Button to Open the Modal -->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal">
									Samsung
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/samsung/s20.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Samsung Galaxy S20, Plus & Ultra</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>
								<button onclick="location.href='https://www.samsung.com/us/mobile/galaxy-s20-5g/'" 
								type="button" class="btn btn-blog">Samsung</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal2">
									Samsung
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/samsung/fold.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Samsung Galaxy Z Fold2 5G</h3>
                                <!--<button class="btn btn-blog">iPhone</button>
								<button onclick="location.href='https://www.samsung.com/us/smartphones/galaxy-z-fold2-5g/'" 
								type="button" class="btn btn-blog">Samsung</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal3">
									Samsung
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/phones/samsung/z.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Samsung Galaxy Z Flip</h3>
                                <!--<button class="btn btn-blog">Google</button>
								<button onclick="location.href='https://www.samsung.com/us/mobile/galaxy-z-flip/'" 
								type="button" class="btn btn-blog">Samsung</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal4">
									Samsung
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- Blog Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/phones/iphone/11 pro.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone 11 Pro and iPhone 11 Pro Max</h3>
                                <!--<button class="btn btn-blog">Samsung</button>
								<button onclick="location.href='https://www.apple.com/iphone-11-pro/'" 
								type="button" class="btn btn-blog">iPhone</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal21">
									iPhone
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/iphone/11.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone 11</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-
								<button onclick="location.href='https://www.apple.com/iphone-11/'" 
								type="button" class="btn btn-blog">iPhone</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal22">
									iPhone
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/iphone/se.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone SE (2020)</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-
								<button onclick="location.href='https://www.apple.com/iphone-se/'" 
								type="button" class="btn btn-blog">iPhone</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal23">
									iPhone
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/iphone/xr.png" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone XR</h3>
                                <!--<button class="btn btn-blog">iPhone</button>
								<button onclick="location.href='https://www.apple.com/shop/buy-iphone/iphone-xr'" 
								type="button" class="btn btn-blog">iPhone</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal24">
									iPhone
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/phones/xiaomi/mi10.png" alt="post-1">
                            <div class="blog-title">
                                <h3>Xiaomi Mi 10</h3>
                                <!--<button class="btn btn-blog">Samsung</button>
								<button onclick="location.href='https://www.mi.com/global/mi-10/'" 
								type="button" class="btn btn-blog">Xiaomi</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal31">
									Xiaomi
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/xiaomi/f2.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Xiaomi POCO F2 Pro</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>
								<button onclick="location.href='https://www.poco.net/global/poco-f2-pro/specs_m/'" 
								type="button" class="btn btn-blog">Xiaomi</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal32">
									Xiaomi
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/xiaomi/r note9.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Xiaomi Redmi Note 9</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>
								<button onclick="location.href='https://www.mi.com/global/redmi-note-9'" 
								type="button" class="btn btn-blog">Xiaomi</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal33">
									Xiaomi
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/xiaomi/a3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Xiaomi Mi A3</h3>
                                <!--<button class="btn btn-blog">iPhone</button>
								<button onclick="location.href='https://www.mi.com/global/mi-a3'" 
								type="button" class="btn btn-blog">Xiaomi</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal34">
									Xiaomi
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/phones/pixel/4a.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 4a</h3>
                                <!--<button class="btn btn-blog">Samsung</button>
								<button onclick="location.href='https://store.google.com/in/product/pixel_4a'" 
								type="button" class="btn btn-blog">Google</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal41">
									Google
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/pixel/4 xl.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 4 XL</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-
								<button onclick="location.href='https://www.gsmarena.com/google_pixel_4_xl-9895.php'" 
								type="button" class="btn btn-blog">Google</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal42">
									Google
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/pixel/4.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 4</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>
								<button onclick="location.href='https://store.google.com/us/product/pixel_4'" 
								type="button" class="btn btn-blog">Google</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal43">
									Google
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/pixel/3a.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 3a</h3>
                                <!--<button class="btn btn-blog">iPhone</button>
								<button onclick="location.href='https://www.gsmarena.com/google_pixel_3a-9408.php'" 
								type="button" class="btn btn-blog">Google</button>-->
								<button type="button" class="btn btn-blog" data-toggle="modal" data-target="#myModal44">
									Google
								</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="./assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="./assets/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="./assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="./assets/instagram/thumb-card8.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2020 All rights reserved | made by
                <a href="https://www.youtube.com/" target="_black">5GArena <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->
	
	
	<!------------------------------ The Modal ---------------------------------------->
	<!--Modal 1 -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy Note20 & Ultra</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '1'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause()">Play/Pause</button> 
			  <button onclick="makeBig()">Big</button>
			  <button onclick="makeSmall()">Small</button>
			  <button onclick="makeNormal()">Normal</button>
			  <br><br>
			  <video id="video1" width="420">
				<source src="./assets/video/n20.mp4" type="video/mp4">
				<source src="./assets/video/n20.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo = document.getElementById("video1"); 

			function playPause() { 
			  if (myVideo.paused) 
				myVideo.play(); 
			  else 
				myVideo.pause(); 
			} 

			function makeBig() { 
				myVideo.width = 560; 
			} 

			function makeSmall() { 
				myVideo.width = 320; 
			} 

			function makeNormal() { 
				myVideo.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 2 -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy S20, Plus & Ultra</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '2'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause2()">Play/Pause</button> 
			  <button onclick="makeBig2()">Big</button>
			  <button onclick="makeSmall2()">Small</button>
			  <button onclick="makeNormal2()">Normal</button>
			  <br><br>
			  <video id="video2" width="420">
				<source src="./assets/video/s20.mp4" type="video/mp4">
				<source src="./assets/video/s20.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo2 = document.getElementById("video2"); 

			function playPause2() { 
			  if (myVideo2.paused) 
				myVideo2.play(); 
			  else 
				myVideo2.pause(); 
			} 

			function makeBig2() { 
				myVideo2.width = 560; 
			} 

			function makeSmall2() { 
				myVideo2.width = 320; 
			} 

			function makeNormal2() { 
				myVideo2.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 3 -->
  <div class="modal" id="myModal3">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy Z Fold2 5G</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '3'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause3()">Play/Pause</button> 
			  <button onclick="makeBig3()">Big</button>
			  <button onclick="makeSmall3()">Small</button>
			  <button onclick="makeNormal3()">Normal</button>
			  <br><br>
			  <video id="video3" width="420">
				<source src="./assets/video/fold2.mp4" type="video/mp4">
				<source src="./assets/video/fold2.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo3 = document.getElementById("video3"); 

			function playPause3() { 
			  if (myVideo3.paused) 
				myVideo3.play(); 
			  else 
				myVideo3.pause(); 
			} 

			function makeBig3() { 
				myVideo3.width = 560; 
			} 

			function makeSmall3() { 
				myVideo3.width = 320; 
			} 

			function makeNormal3() { 
				myVideo3.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 4 -->
  <div class="modal" id="myModal4">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy Z Flip</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '4'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause4()">Play/Pause</button> 
			  <button onclick="makeBig4()">Big</button>
			  <button onclick="makeSmall4()">Small</button>
			  <button onclick="makeNormal4()">Normal</button>
			  <br><br>
			  <video id="video4" width="420">
				<source src="./assets/video/flip.mp4" type="video/mp4">
				<source src="./assets/video/flip.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo4 = document.getElementById("video4"); 

			function playPause4() { 
			  if (myVideo4.paused) 
				myVideo4.play(); 
			  else 
				myVideo4.pause(); 
			} 

			function makeBig4() { 
				myVideo4.width = 560; 
			} 

			function makeSmall4() { 
				myVideo4.width = 320; 
			} 

			function makeNormal4() { 
				myVideo4.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

  <!--Modal 2-1 -->
  <div class="modal" id="myModal21">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone 11 Pro and iPhone 11 Pro Max</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '5'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause21()">Play/Pause</button> 
			  <button onclick="makeBig21()">Big</button>
			  <button onclick="makeSmall21()">Small</button>
			  <button onclick="makeNormal21()">Normal</button>
			  <br><br>
			  <video id="video21" width="420">
				<source src="./assets/video/i11p.mp4" type="video/mp4">
				<source src="./assets/video/i11p.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo21 = document.getElementById("video21"); 

			function playPause21() { 
			  if (myVideo21.paused) 
				myVideo21.play(); 
			  else 
				myVideo21.pause(); 
			} 

			function makeBig21() { 
				myVideo21.width = 560; 
			} 

			function makeSmall21() { 
				myVideo21.width = 320; 
			} 

			function makeNormal21() { 
				myVideo21.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 2-2 -->
  <div class="modal" id="myModal22">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone 11</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '6'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause22()">Play/Pause</button> 
			  <button onclick="makeBig22()">Big</button>
			  <button onclick="makeSmall22()">Small</button>
			  <button onclick="makeNormal22()">Normal</button>
			  <br><br>
			  <video id="video22" width="420">
				<source src="./assets/video/i11.mp4" type="video/mp4">
				<source src="./assets/video/i11.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo22 = document.getElementById("video22"); 

			function playPause22() { 
			  if (myVideo22.paused) 
				myVideo22.play(); 
			  else 
				myVideo22.pause(); 
			} 

			function makeBig22() { 
				myVideo22.width = 560; 
			} 

			function makeSmall22() { 
				myVideo22.width = 320; 
			} 

			function makeNormal22() { 
				myVideo22.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 2-3 -->
  <div class="modal" id="myModal23">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone SE (2020)</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '7'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause23()">Play/Pause</button> 
			  <button onclick="makeBig23()">Big</button>
			  <button onclick="makeSmall23()">Small</button>
			  <button onclick="makeNormal23()">Normal</button>
			  <br><br>
			  <video id="video23" width="420">
				<source src="./assets/video/ise.mp4" type="video/mp4">
				<source src="./assets/video/ise.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo23 = document.getElementById("video23"); 

			function playPause23() { 
			  if (myVideo23.paused) 
				myVideo23.play(); 
			  else 
				myVideo23.pause(); 
			} 

			function makeBig23() { 
				myVideo23.width = 560; 
			} 

			function makeSmall23() { 
				myVideo23.width = 320; 
			} 

			function makeNormal23() { 
				myVideo23.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 2-4 -->
  <div class="modal" id="myModal24">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone XR</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '8'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause24()">Play/Pause</button> 
			  <button onclick="makeBig24()">Big</button>
			  <button onclick="makeSmall24()">Small</button>
			  <button onclick="makeNormal24()">Normal</button>
			  <br><br>
			  <video id="video24" width="420">
				<source src="./assets/video/ixr.mp4" type="video/mp4">
				<source src="./assets/video/ixr.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo24 = document.getElementById("video24"); 

			function playPause24() { 
			  if (myVideo24.paused) 
				myVideo24.play(); 
			  else 
				myVideo24.pause(); 
			} 

			function makeBig24() { 
				myVideo24.width = 560; 
			} 

			function makeSmall24() { 
				myVideo24.width = 320; 
			} 

			function makeNormal24() { 
				myVideo24.width = 420; 
			} 
			</script> 
        </div>
		
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
		
		<!--Modal 3-1 -->
  <div class="modal" id="myModal31">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi Mi 10</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '9'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/KS6IvHRhSFQ" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 3-2 -->
  <div class="modal" id="myModal32">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi POCO F2 Pro</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '10'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/5GlypUvALJA"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 3-3 -->
  <div class="modal" id="myModal33">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi Redmi Note 9</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '11'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/89AyLjElVH0" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 3-4 -->
  <div class="modal" id="myModal34">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi Mi A3</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '12'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/uaewrFz7Qp8"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
		
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  	<!--Modal 4-1 -->
  <div class="modal" id="myModal41">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 4a</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '13'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/v_f3Km_eQnw"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 4-2 -->
  <div class="modal" id="myModal42">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 4 XL</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '14'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/RgnN2mjLbz0" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 4-3 -->
  <div class="modal" id="myModal43">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 4</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '15'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/0gizLT97cKo"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 4-4 -->
  <div class="modal" id="myModal44">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 3a</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '12'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vc7LlUtQgNw"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
		
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  	<!--------------x---------------- The Modal --------------------x-------------------->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>