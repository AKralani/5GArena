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
                <h1>Amazing Place for Technology</h1>
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
                                <h3>Samsung Galaxy Note 20 Ultra</h3>
                                <!--<button class="btn btn-blog">Samsung</button>-->
								<button onclick="location.href='https://www.samsung.com/global/galaxy/galaxy-note20/'" 
								type="button" class="btn btn-blog">Samsung</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>OnePlus 8 Pro</h3>
                                <!--<button class="btn btn-blog">OnePlus</button>-->
								<button onclick="location.href='https://www.oneplus.com/8-pro'" 
								type="button" class="btn btn-blog">OnePlus</button>
                                <span>22 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-2.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>iPhone 11 Pro Max</h3>
                                <!--<button class="btn btn-blog">iPhone</button>-->
								<button onclick="location.href='https://www.apple.com/shop/buy-iphone/iphone-11-pro'" 
								type="button" class="btn btn-blog">iPhone</button>
                                <span>1 hour</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-5.png" alt="post-1">
                            <div class="blog-title">
                                <h3>Google Pixel 4a</h3>
                                <!--<button class="btn btn-blog">Google</button>-->
								<button onclick="location.href='https://store.google.com/in/product/pixel_4a'" 
								type="button" class="btn btn-blog">Google</button>
                                <span>2 hours</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- Blog Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog1.webp" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;August 09, 2020</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://www.samsung.com/us/smartphones/galaxy-z-fold2-5g/">Introducing Galaxy Z Fold2 5G</a>
                            <p>Introducing a device unlike any other, with a cutting-edge hinge that allows it to fold like a book, 
								stand on its own and defy what you thought a smartphone could do.
                            </p>
                            <!--<button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>-->
							<button onclick="location.href='https://www.samsung.com/us/smartphones/galaxy-z-fold2-5g/'" 
								type="button" class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog2.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 16, 2020</span>
                                <span>7 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://consumer.huawei.com/en/phones/mate-x-s/">Meet the Unprecedented</a>
                            <p>Spread your wings with HUAWEI Mate Xs??? Falcon Wing Design. Adopting the unique Falcon
								Wing with an innovative hinge, HUAWEI Mate Xs presents groundbreaking technology with
								a remarkable visual sensation. Folded as a sleek smartphone, it fits perfectly in your
								pocket and palm. You can always be ready for tasks on the go. Flip it open, you can 
								explore more in the double-sized immersive screen with comfort and ease.
                            </p>
                            <!--<button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>-->
							<button onclick="location.href='https://consumer.huawei.com/en/phones/mate-x-s/'" 
								type="button" class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog3.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 19, 2020</span>
                                <span>5 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://www.mi.com/global/mi-mix-alpha">Mi MIX Alpha 5G Surround Display Concept Smartphone</a>
                            <p>Explore ??? Let the future contain more possibilities.
								Mi MIX Alpha is a futuristic phone that shows the many avenues for Xiaomi to explore during the 5G era.
								Not all possibilities can be explored. We do not explore to find a fixed future,
								but to get a glimpse of its endless possibilities.
                            </p>
                            <!--<button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>-->
							<button onclick="location.href='https://www.mi.com/global/mi-mix-alpha'" 
								type="button" class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog4.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 21, 2020</span>
                                <span>12 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://www.nokia.com/phones/en_int/nokia-8-3-5g">Nokia 8.3 5G - Elevate your creativity</a>
                            <p>Make every video epic. 
								Shoot like a pro ??? without having to be one ??? thanks to built-in ZEISS cinematic effects. 
								Easily add anamorphic and blue flares to your footage for an effortlessly epic look. 
								Plus, share your stunning 4K videos with 5G.
                            </p>
                            <!--<button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>-->
							<button onclick="location.href='https://www.nokia.com/phones/en_int/nokia-8-3-5g'" 
								type="button" class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Brands</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="https://www.gsmarena.com/samsung-phones-9.php">Samsung</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="https://www.gsmarena.com/apple-phones-48.php">Apple</a>
                                <span>(02)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="https://www.gsmarena.com/google-phones-107.php">Google</a>
                                <span>(07)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="https://www.gsmarena.com/huawei-phones-58.php">Huawei</a>
                                <span>(01)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="https://www.gsmarena.com/xiaomi-phones-80.php">Xiaomi</a>
                                <span>(08)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-1.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2020</span>
                                    <span>122 Commets</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://www.theguardian.com/technology/2019/dec/17/best-smartphone-2019-iphone-oneplus-samsung-and-huawei-compared-and-ranked">
								Best smartphone 2019: iPhone, OnePlus, Samsung and Huawei</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-2.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                    <span>112 Commets</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://www.androidauthority.com/best-android-apps-312570/">15 best Android apps of all time</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-3.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                    <span>99 Commets</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://www.digitaltrends.com/mobile/how-to-jailbreak-your-iphone/">How to Jailbreak iPhone</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-4.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                    <span>58 Commets</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://www.androidcentral.com/root">Root Your Android Phone: What is Root & How To</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-5.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                    <span>41 Commets</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://medium.com/multiplier-magazine/why-did-nokia-fail-81110d981787">
								Why did Nokia fail and what can you learn from it?</a>
                            </div>
                        </div>
                    </div>
                    <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                        <h2>Newsletter</h2>
                        <div class="form-element">
                            <input type="text" class="input-element" placeholder="Email">
                            <button class="btn form-btn">Subscribe</button>
                        </div>
                    </div>
                    <div class="popular-tags">
                        <h2>Popular Tags</h2>
                        <div class="tags flex-row">
                            <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="200">technology</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="300">apps</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="400">5G</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="500">android</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="600">games</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="700">camera</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="800">iPhone</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <?php include 'footer.html'?>

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