<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale = 1.0">
    <title>NitipDonk</title>
    <?php include "view/styles.php" ?>
</head>
    
<body>
    <section class="navigation">
         <nav class="navbar">
          <a class="navbar-brand" href=""><img src="Image/comLogo.png"></a>
          <div class="nav-links">
            <ul>
              <li><a class="nav-link" href="#Home">HOME</a></li>
              <li><a class="nav-link" href="#Services">SERVICES</a></li>
              <li><a class="nav-link" href="#Steps">STEPS</a></li>
              <li><a class="nav-link" href="#Goals">GOALS</a></li>
              <li><a class="nav-link" href="#Contact">CONTACT US</a></li>
            </ul>
          </div>
        </nav>
    </section>

    <!-- header -->
    <?php include "header.php"?>
    <!-- header -->
    
    <!--About Us-->
    <section class="about-us animate-bottom">
        <div class="white-box">
            <h1 class="title2">Why Choose Us</h1>
            <p class="description2" style="margin-bottom: 0px;">Open an online shop and buy and sell in our app.</p>
            <p class="description6" style="margin-top: 0px;">Guaranteed with the simplicity and efficiency of the app.</p>
        </div>
    </section>
    <!--About Us-->
    
    <!--Services-->
    <?php include "services.php"?>
    <!--Services-->
    
    <!-- Steps -->
    <?php include "steps.php" ?>
    <!-- Steps -->
    
    <!-- Goals -->
    <?php include "goals.php" ?>
    <!-- Goals -->

    <!-- Contact and footer-->
    <?php include "footer.php" ?>
    <!-- Contact and footer-->
    
    <?php include "view/scripts.php" ?>
</body>

</html>