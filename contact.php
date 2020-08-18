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
                <h1>Contact Us</h1>
                <!--<button class="btn">Explore</button>-->
				<button onclick="location.href='brands.php'" 
								type="button" class="btn">Explore</button>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                
				<div id="main">
				<div id="form_sample">
			 </div>
 
			 <style>
				 /* below line is write to use google font online */
				@import url(https://fonts.googleapis.com/css?family=Ubuntu);
				 
				div#main{
				width: 830px;
				height: 650px;
				margin: 0px auto;
				font-family: 'Ubuntu', sans-serif;
				}
				 
				div#form_sample{
				text-align:center;
				border: 1px solid #ccc;
				width: 300px;
				padding: 0px 50px 15px;
				margin-top:20px;
				box-shadow: 0 0 15px;
				border-radius: 6px;
				float:left;
				}
				 
				#main h1{
				margin-top:40px;
				}
				 
				hr{
				margin-top:-5px;
				}
				 
				label{
				float: left;
				font-size: 16px;
				}
				 
				input[type="text"]{
				width:100%;
				margin-top:10px;
				height: 35px;
				margin-bottom: 25px;
				padding:10px;
				border:3px solid #2BC1F2;
				}
				 
				textarea{
				width:100%;
				border:3px solid #2BC1F2;
				padding:10px;
				margin-bottom: 25px;
				margin-top: 10px;
				height: 100px;
				resize:none;
				}
				 
				input[type="submit"]{
				width:100%;
				padding: 10px 45px;
				background-color: #2BC1F2;
				border: none;
				color: white;
				font-size: 18px;
				font-weight: bold;
				cursor: pointer;
				font-family: 'Ubuntu', sans-serif;
				}
			 </style>
 
			 <script>
				 //fetching HTML Elements in variables by ID
				var x = document.getElementById("form_sample");
				 
				var createform = document.createElement('form'); // Create New Element form
				 createform.setAttribute("action", ""); // Setting action Attribute on form
				 createform.setAttribute("method", "post"); // Setting method Attribute on form
				 x.appendChild(createform);
				 
				var heading = document.createElement('h2'); // Heading of form
				 heading.innerHTML = "Contact Form ";
				 createform.appendChild(heading);
				 
				var line = document.createElement('hr'); //giving horizontal row after heading
				 createform.appendChild(line);
				 
				var linebreak = document.createElement('br');
				 createform.appendChild(linebreak);
				 
				var namelabel = document.createElement('label'); // Create Label for name field
				 namelabel.innerHTML = "Your Name : "; // Set Field Labels
				 createform.appendChild(namelabel);
				 
				var inputelement = document.createElement('input'); // Create input field for name
				 inputelement.setAttribute("type", "text");
				 inputelement.setAttribute("name", "dname");
				 createform.appendChild(inputelement);
				 
				var linebreak = document.createElement('br');
				 createform.appendChild(linebreak);
				 
				var emaillabel = document.createElement('label'); //Create Label for email field
				 emaillabel.innerHTML = "Your Email : ";
				 createform.appendChild(emaillabel);
				 
				var emailelement = document.createElement('input'); // Create input field for email
				 emailelement.setAttribute("type", "text");
				 emailelement.setAttribute("name", "demail");
				 createform.appendChild(emailelement);
				 
				var emailbreak = document.createElement('br');
				 createform.appendChild(emailbreak);
				 
				// Append Textarea
				var messagelabel = document.createElement('label');
				 messagelabel.innerHTML = "Your Message : ";
				 createform.appendChild(messagelabel);
				 
				var texareaelement = document.createElement('textarea');
				 texareaelement.setAttribute("name", "dmessage");
				 createform.appendChild(texareaelement);
				 
				var messagebreak = document.createElement('br');
				 createform.appendChild(messagebreak);
				 
				// Append Submit Button
				var submitelement = document.createElement('input');
				 submitelement.setAttribute("type", "submit");
				 submitelement.setAttribute("name", "dsubmit");
				 submitelement.setAttribute("value", "Submit");
				 createform.appendChild(submitelement);
			 </script>
				
            </div>
        </section>
		
        <!-- ----------x---------- Blog Carousel --------x-------- -->

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