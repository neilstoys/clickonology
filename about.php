<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : about.php                 //
// CREATED : Nov 21 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
$activePage = basename($_SERVER['PHP_SELF'], '.php');

?>

    <?php include 'header.php';?>
<body id='about'>
    <?php include 'nav.php';?>
    <div id='dv'> <!--creates a document wide div-->
      <div class='container'>        
        <!-- Main Content -->  
        <h1>ABOUT CLICKONOLOGY</h1>
        <div id='mainPageContent'>            
          <p>Owner has been computer programming since 1982 and in the web design field since 1999. Progression of the internet has brought the world a lot closer than ever before. Now, with the aid of Smartphones, the other side of the globe is in the palm of your hand.</p>
          <p>Many web design companies exist. They charge extortionate fees for websites that are unnecessarily complex but can make your eyes pop out! Full of razmataz, glitz and pop-ups. The real content is hidden, bland and (in some cases) hard to find what you are looking for. HTML, CSS, Javascript, PHP. . . who cares? You don't, we do. What matters to you is the result!</p>
          <p>Clickonology uses today's cutting edge technology to keep websites clean and easy to navigate to the material that really matters. Clickonology uses Responsive web designs so your content shows well whatever device your audience uses to view your website. It keeps the glitter to a minimum to give the user what they need. . . . . . </p>
          <p align='center'><strong>information about YOU and YOUR business!</strong></p>


        </div>
      </div>  
    </div>
    <!--End Main Content-->   

    <!-- Google Analytics --> 
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-45687909-1', 'clickonology.com');
      ga('send', 'pageview');

    </script>

    <?php include 'footer.php';?>
  </body>
</html>




