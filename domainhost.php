<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : domainhost.php            //
// CREATED : Nov 21 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
$activePage = basename($_SERVER['PHP_SELF'], '.php');
$sDisplayBlock = "<p align='center'><img src='img/network.jpg' alt='Tech stuff' border='0'></p>"
?>

    <?php include 'header.php';?>

<body id='domainhost'><!--Page id for js file use-->

    <?php include 'nav.php';?>
    <div class='container'>
      <!-- Main Content -->  
      <h1>DOMAIN and HOSTING</h1>
      <div id='mainPageContent'>  
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2>Domain Registration</h2>
                    <p>You need a Domain Name (i.e. yourbusinessname.com). The domain Name is registered and in the same way as  leasing or renting a house/shop which has an address. You never 'own' it.</p> 
                </div>
                <div class="col-md-6">
                    <h2>Web & Email Hosting</h2>
                    <p>You need a Web Host. This is the inside of your house/shop. This too is leased or rented and this is where your website will be. This is where the people visit after you set it up and optimize it for your business.</p>
                <p>Web Hosting needs mail and email accounts have to be configured for delivery.</p>
                </div>
            </div>        

        <?php echo $sDisplayBlock; ?>
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

       