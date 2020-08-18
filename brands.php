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

    <?php include 'nav.html'?>

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

    <?php include 'footer.html'?>

    <!-- -------------x------------- Footer --------------------x------------------- -->
	
	
	<!------------------------------ The Modal ---------------------------------------->
	
	<?php include 'modal.php'?>
  
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