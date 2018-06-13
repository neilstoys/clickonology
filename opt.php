<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : opt.php                   //
// CREATED : Nov 21 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
$activePage = basename($_SERVER['PHP_SELF'], '.php');
$sDisplayBlock = "<div class='row'>
          <!-- offset image column -->             
          <div><img src='img/clickMouseTransp.png' class='img-fluid center-block' alt='Clickonology Logo' border='0'></div>
        </div>";
?>

    <?php include 'header.php';?>

<body id='opt'><!--Page id for js file use-->
    
    <?php include 'nav.php';?>
    <div class='container'>
      <!-- Main Content -->  
      <h1>OPTIMIZATION</h1>
      <div id='centerDivContent'>  
          
        <div class='row'>
          <div class="col-md-6"> 
            <h3>SEO (Search Engine Optimization)</h3>
            <p>SEO is an acronym for "search engine optimization" or "search engine optimizer" and is a methodology for strategies and techniques to encourage visitors to your website. In a search results page of any search engine (SERP), it is possible to obtain a high-ranking placement.<br>
                The higher a website ranks in organic (paid pages not included) results of a users search, the greater the chance that that site will be clicked on by that user. (i.e. a user generally doesn't click on link on page 94 of his search to visit a website.) <br>
    So ideally when a search is initiated, you need your website listed at the top of page one!</p>
          </div>
          <div class="col-md-6">
            <h3>Marketing</h3>
            <p>Content Marketing is offered by consistently creating valuable and relevant industry related information to provide an audience and develop a loyal customer base.<br>
    Social Media Marketing is becoming more prevalent. Facebook, LinkedIn, Twitter, Pinterest, Google+, Tumblr and Instagram are all pushing the boundaries of diverse media. It's another angle to help your business lead the field.</p>
          </div>  
        </div>
          
        <?php echo $sDisplayBlock; ?>        
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
