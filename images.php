<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : contact.php            //
// CREATED : Nov 21 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
$activePage = basename($_SERVER['PHP_SELF'], '.php');
$sDisplayBlock = "<div class='row'>
          <!-- offset image column -->             
          <div><a href='mailto:support@clickonology.com'><img src='img/clickMouseTransp.png' class='center-block' alt='Clickonology Logo' border='0'></a></div>
        </div>";
?>

    <?php include 'header.php';?>

<body id='contact'><!--Page id for js file use-->
    
    <?php include 'nav.php';?>
    <div class='container'>
        
        
      <!-- Main Content --> 
      <h1>CONTACT</h1>
      
      <div class="rows text-center">          
        <div>         
            <h3>Email:</h3>
            <p>Contact us if you have any enquiries: <br>
                <a href="mailto:support@clickonology.com">support@clickonology.com</a></p>

             <?php echo $sDisplayBlock; ?>

            <h3>Phone:</h3> 
            <p>519-666-2407</p>
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

       