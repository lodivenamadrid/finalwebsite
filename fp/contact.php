
<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Food.Stay.Wander</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/temp.css" />
  <link rel="stylesheet" href="css/tempnav.css" />
  <link rel="stylesheet" href="css/image.css" /> 
  <link rel="stylesheet" href="css/forms.css" />     
 </head>
    
   <body>
     <header>
      <h1 class="heading"><a href="template.html"><img src="images/header.png" alt="Food.Stay.Wander"></a></h1>
     <nav class="topnav" id="myTopnav">
       <a href="template.html" class="active">HOME</a>
       <a href="adventures.html">ADVENTURES</a>
       <a href="maps.html">MAPS</a>
       <a href="about.html">ABOUT US</a>
       <a href="contact.php">CONTACT US</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </nav>
     </header>
     
     <main class="wrapper">
       <h2 class="subheader">CONTACT US</h2>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "lodivena.madrid@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Edward Madrid"; //place your client's name here
        $website = "Food.Stay.Wander";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

     <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Contact Us</a>, All Rights Reserved | <a href="disclaimer.html" target="_blank">Privacy and Disclaimer</a> | <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> | <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
     </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>