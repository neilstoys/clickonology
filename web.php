<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : web.php                   //
// CREATED : Nov 21 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
$activePage = basename($_SERVER['PHP_SELF'], '.php');
$sDisplayBlock = "<p><img src='img/pcwhat.png' alt='Clickonology website' border='0'></p>"
?>

    <?php include 'header.php';?>

<body id='web'><!--Page id for js file use-->
    
    <?php include 'nav.php';?>

    <div class='container'>
      <!-- Main Content -->  
      <h1>WEBSITE</h1>
      <div id='mainPageContent'>  
        <div class='row'>          
          <?php echo $sDisplayBlock; ?>        
          <p>There are several steps required to build a website right without fancy bling:</p>    
          <p>Assessment:<br>
              What is the website for? Business, Organization, Personal? What will the website be focused toward? Business webpages need to target markets? Business history? Marketing plan & budgets? How do you want your website to represent your business (or you)? Will the website be integrated into marketing techniques, i.e. social media, e-mail marketing or off-line advertising?</p>
          <img class='center-block' src='img/tablet.png' alt='Clickonology tablet' border='0'>
          <p>Planning:<br>
              Rough sketches / designs show page lay out. It marks out where the logo and main navigation will go, the layout of the home page layout, content pages, blog pages, maybe an events calendar and forms. Once the home page is completed, the other pages are created to make a uniform website.</p>

          <p>Keyword Development:<br>
              Carefully thought out keywords will enhance the site's presence on the internet through search engines. They can be used in research using SAO and analytic tools.</p>
        </div>        
 
        <div class='row'>
          <!-- offset image column -->             
          <div class='col-md-2 col-md-offset-9 align-right'><img src='img/cell.png' class='img-fluid' alt='cellphone'  border='0'></div>
        </div>

        <div class='row'>          
          <p>Site Layout:<br>
              A simple, well planned layout makes it easy for website visitors to get where they need to be and makes it easy for search engines to index and 'understand' your website avoiding a user from clicking off to a different website.</p>

          <p>Navigation:<br>
              Sitemaps display the site structure of the webpages. Easy navigation makes the website user-friendly keeping the user on the website longer and returning frequently.</p>

          <p>Edit:<br>
              Editing each page content is just as important. The main body text of each page will be inserted and images added before styling the rough work. The final roll-out will follow continuous re-editing and checking text, images and properties unique to each page.</p>

          <p>Roll Out:<br>
              The website is checked for completion and finally uploaded to the server.</p>

          <p>Updates:<br>
              There are three things required of a website. Keep your audience interested. Keep them serviced as required. Make them come back frequently! So. KEEP YOUR WEBSITE CLEAN AND UP TO DATE! <br>
           Periodically, we make sure your website remains in pristine condition ensuring all links are fully functional and your site has not been attacked by hackers. </p>

          <h3>Graphic Design</h3>  
          <p>We can create the graphical design of your logo and add decoration to your pages. Your colours are an important part in shaping your brand look & feel of the site's design. Files can be sliced and modified, assembled using HTML (for page formatting) and CSS (for styling) to speed up loading of the website.</p>

          <h3>Photo/Video</h3>

          <p>Images can be remodeled and inserted to enhance the look of each page. Interlaced images load quicker and evoke the website quickly and consistently across a variety of web browsers. Layout of the page is important so that it looks attractive and provides a great user experience. Clear, well sized images are necessary to decorate text on each page. Videos provide an essential media where needed.</p>

          <h3>Databases</h3>        
          <p>Not required for most websites but the facility for log in or SQL database usage can be accommodated to accompany the website.</p>
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
