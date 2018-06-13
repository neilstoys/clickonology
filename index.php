<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : index.php                 //
// CREATED : Nov 07 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
$activePage = basename($_SERVER['PHP_SELF'], '.php');
$sDisplayBlock = "<p align='center'><img src='img/clickMouseTransp.png' alt='Clickonology Logo' border='0'></p>"
?>

    <?php include 'header.php';?>

<body id='index'><!--Page id for js file use-->

    <!-- Main Content -->
    <div id="maintext" class="container-fluid section">

        <div class='row'>
            <div class='col-md-12'>
                <h1>THE CLICKONOLOGY WAY</h1>
              <p>At Clickonology.com, we know a website is a great window to your business seen from anywhere in the world. In these days of the Smartphone, access to the internet is available at the touch of a button - and so is your business. Whether it is just a phone number or address required or buying a product at home, work or on the go, let Clickonology increase YOUR presence online and increase YOUR profit at an affordable price.</p>
              <p>Your website will be fully RESPONSIVE for tailored use on any platform whether it be mobile phone, tablet, laptop, pc, tv screen. This approach also enhances search engine results. Clickonology makes sure you have full control and input in the design, creation and roll out of your own personalised responsive website.</p>
              <p>There are many services online offering FREE webpage templates for you to create you own website. What you get is what you pay for. Bloated code on these FREE pages can smokescreen your content from the newest search engine techniques. Quite often, inserted pictures and videos can do nothing to help your website. They might look good but your audience will be limited by lack of exposure.</p>
              <p>All webpages created by Clickonology are HAND CRAFTED! Each page has it's uniquely placed clean code to encourage the search engines to promote your content. Your webpages will be enhanced with minimal code and fuller content to drive your pages to a much higher ranking in other people's searches.</p>
              <p>You don't need a fancy website full of bling which is not the answer but a website that just works and works well for YOU!</p>

              <p>Contact Clickonology now for a positive approach to your new project.</p>
                    <button class="btn btn-default btn-lg">Get in Touch</button>
              <?php echo $sDisplayBlock; ?>
            </div>
        </div>



        <!-- Container (Services Section) -->
        <div id="services" class="container-fluid text-center section">
            <h2>SERVICES</h2>
            <h4>What we offer</h4>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <i class="fas fa-home"></i>
                    <h4>DOMAIN</h4>
                    <p>Catchy address for your website</p>
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-globe"></i>
                    <h4>HOSTING</h4>
                    <p>Your home from home</p>
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-user-friends"></i>
                    <h4>WEBSITE</h4>
                    <p>Show the world what you have</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <i class="fas fa-angle-double-up"></i>
                    <h4>SEO</h4>
                    <p>Boost your ranking</p>
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-dollar-sign"></i>
                    <h4>CERTIFIED</h4>
                    <p>Increase sales</p>
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-wrench"></i>
                    <h4>clickonOLOGY</h4>
                    <p>. . . for a job done well</p>
                </div>
            </div>

            <!-- Container (Pricing Section) -->
            <div id="pricing" class="container-fluid section">
                <div class="text-center">
                    <h2>PRICING</h2>
                    <h4>Choose a plan that works for you</h4>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <h1>Basic</h1>
                            </div>
                            <div class="panel-body">
                                <p><strong>1</strong> Main page</p>
                                <p><strong>5</strong> Sections</p>
                                <p><strong>10</strong> Images</p>
                                <p><strong>400</strong> Words</p>
                                <p><strong>Endless</strong> Support</p>
                            </div>
                            <div class="panel-footer">
                                <h3>Call</h3>
                                <h4>for quote</h4>
                                <button class="btn btn-lg">Contact here</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <h1>Pro</h1>
                            </div>
                            <div class="panel-body">
                                <p><strong>4</strong> Pages</p>
                                <p><strong>25</strong> Images</p>
                                <p><strong>400</strong> Words per page</p>
                                <p><strong>Endless</strong> Support</p>
                            </div>
                            <div class="panel-footer">
                                <h3>Call</h3>
                                <h4>for quote</h4>
                                <button class="btn btn-lg">Contact here</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <h1>Premium</h1>
                            </div>
                            <div class="panel-body">
                                <p><strong>5+</strong> Pages</p>
                                <p><strong>50</strong> Images</p>
                                <p><strong>400</strong> Words per page</p>
                                <p><strong>Endless</strong> Support</p>
                            </div>
                            <div class="panel-footer">
                                <h3>Call</h3>
                                <h4>for quote</h4>
                                <button class="btn btn-lg">Contact here</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div>
        <p class="fa-icon"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f socialIcons"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter socialIcons"></i></a> <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram socialIcons"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube socialIcons"></i></a></p>
    </div>

    </div><!--End Main Content-->

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