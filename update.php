<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : update.php                //
// CREATED : Nov 21 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
$activePage = basename($_SERVER['PHP_SELF'], '.php');
$sDisplayBlock = "<p align='center'><img src='img/cable.jpg' alt='Clickonology Update' border='0'></p>"
?>

    <?php include 'header.php';?>

<body id='update'><!--Page id for js file use-->

    <?php include 'nav.php';?>
    <div class='container'>
      <!-- Main Content -->  
      <h1>ANALYTICAL UPDATES</h1>
      <div id='centerDivContent'>  

        <div class='row'>
          <h3></a>Analytics</h3>
          <p>Analytics are a ways of finding out how well your website is doing alongside the prosperity of your business, which parts of the website are working efficiently and which pages/articles/areas of the website need attention. It could be your business needs tweaking to meet a demand lacking on your website. Visitor information can be collected and used to steer you business in a different direction. Hit counts on various pages indicate the popularity of a certain nature (and an unpoplularity in others). Analytics is an ongoing process and not one to be dismissed as this up-to-date information could be the make or break of a successful enterprise.</p>

          <?php echo $sDisplayBlock; ?>        

          <h3></a>Updates</h3>
          <p>As you can see from the above Analytics, SEO and Marketing sections, updates come from acting on that data collected into the information to keep your business on top of the competition. Regular updates will keep your game sharp, keep your clientele interested and that will keep them coming back!</p>
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

       