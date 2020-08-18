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
                <h1>About Us</h1>
                <!--<button class="btn">Explore</button>
				<button onclick="location.href='brands.php'" 
								type="button" class="btn">Explore</button>-->
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
				<div id="main">
				<div id="form_sample">
			 </div>
			 <div class="section11">
                    <div class="section11a">
                        <p id="title"><em>About Us...</em></p>
                        <p id="p">Over our long history, our social purpose and commitment to the 
						community has remained the same; to deliver and opportunities that 
						matter to everyone.</p>
                       <p id="p">Our solution experts are here to answer your questions, help you 
					   troubleshoot issues, improve your experience & increase satisfaction 
					   with our solutions. We also help you choose the best product based 
					   on your needs!</p>
                       <p id="p">Find more about some products reviews. </p>
						<button onclick="document.location='logo.html'" class="btn">Our Logo</button>
                    </div>            
                </div>
			 <style>
				.section11{
				width:100%;
				height:350px;
				display: flex;
				margin-top: -40px;
				}
				.section11a{
					margin-top: 23px;
					margin-left: 20px;
					margin-right: 125px;
					width:500px;	
					height: 300px;	
				}
				.section11a a{
					color: #cf6d50;
					background-color: #f1e6b8;
					padding: 10px 20px;
				}
				.section11a p:nth-child(2) {
					line-height: 27px;
				}
				#title{
							font-family: serif;
				font-size: 60px;
				color: #333333;
				text-shadow: 0 0 1px #0000FF;
				}
				#p{
				color: black;
				text-shadow: 0 0 1px #0000FF;
				}
			 </style>
            </div>
        </section>
		
        <!-- ----------x---------- Blog Carousel --------x-------- -->

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <?php include 'footer.html'?>

    <!-- -------------x------------- Footer --------------------x------------------- -->
	
	<style>
	main .site-title{
    background: url('./assets/Logo 720p.gif');
    background-size: cover;
    height: 110vh;
    display: flex;
    justify-content: center;
}
	</style>

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