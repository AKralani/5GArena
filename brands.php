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
                        <a href="brands.html">Brands</a>
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
				<button onclick="location.href='brands.html'" 
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
                                <!--<button class="btn btn-blog">Samsung</button>-->
								<button onclick="location.href='https://www.samsung.com/global/galaxy/galaxy-note20/'" 
								type="button" class="btn btn-blog">Samsung</button>
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
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://www.samsung.com/us/mobile/galaxy-s20-5g/'" 
								type="button" class="btn btn-blog">Samsung</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/samsung/fold.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Samsung Galaxy Z Fold2 5G</h3>
                                <!--<button class="btn btn-blog">iPhone</button>-->
								<button onclick="location.href='https://www.samsung.com/us/smartphones/galaxy-z-fold2-5g/'" 
								type="button" class="btn btn-blog">Samsung</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/phones/samsung/z.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Samsung Galaxy Z Flip</h3>
                                <!--<button class="btn btn-blog">Google</button>-->
								<button onclick="location.href='https://www.samsung.com/us/mobile/galaxy-z-flip/'" 
								type="button" class="btn btn-blog">Samsung</button>
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
                                <!--<button class="btn btn-blog">Samsung</button>-->
								<button onclick="location.href='https://www.apple.com/iphone-11-pro/'" 
								type="button" class="btn btn-blog">iPhone</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/iphone/11.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone 11</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://www.apple.com/iphone-11/'" 
								type="button" class="btn btn-blog">iPhone</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/iphone/se.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone SE (2020)</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://www.apple.com/iphone-se/'" 
								type="button" class="btn btn-blog">iPhone</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/iphone/xr.png" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone XR</h3>
                                <!--<button class="btn btn-blog">iPhone</button>-->
								<button onclick="location.href='https://www.apple.com/shop/buy-iphone/iphone-xr'" 
								type="button" class="btn btn-blog">iPhone</button>
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
                                <!--<button class="btn btn-blog">Samsung</button>-->
								<button onclick="location.href='https://www.mi.com/global/mi-10/'" 
								type="button" class="btn btn-blog">Xiaomi</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/xiaomi/f2.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Xiaomi POCO F2 Pro</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://www.poco.net/global/poco-f2-pro/specs_m/'" 
								type="button" class="btn btn-blog">Xiaomi</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/xiaomi/r note9.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Xiaomi Redmi Note 9</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://www.mi.com/global/redmi-note-9'" 
								type="button" class="btn btn-blog">Xiaomi</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/xiaomi/a3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Xiaomi Mi A3</h3>
                                <!--<button class="btn btn-blog">iPhone</button>-->
								<button onclick="location.href='https://www.mi.com/global/mi-a3'" 
								type="button" class="btn btn-blog">Xiaomi</button>
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
                                <!--<button class="btn btn-blog">Samsung</button>-->
								<button onclick="location.href='https://store.google.com/in/product/pixel_4a'" 
								type="button" class="btn btn-blog">Google</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/pixel/4 xl.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 4 XL</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://www.gsmarena.com/google_pixel_4_xl-9895.php'" 
								type="button" class="btn btn-blog">Google</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/phones/pixel/4.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 4</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://store.google.com/us/product/pixel_4'" 
								type="button" class="btn btn-blog">Google</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/phones/pixel/3a.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 3a</h3>
                                <!--<button class="btn btn-blog">iPhone</button>-->
								<button onclick="location.href='https://www.gsmarena.com/google_pixel_3a-9408.php'" 
								type="button" class="btn btn-blog">Google</button>
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