<?php
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : resp-nav.php              //
// CREATED : Nov 07 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
?>

<nav class='navbar navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
        <a class='navbar-brand' rel='home' href='http://www.clickonology.com/index.php' title='Clickonology'>
        <img style='max-width:100px; margin-top: -1px;'
             src='img/click-brand.png'>
    </a>
      <a class='navbar-brand' href='#'></a>
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
        <li class='<?= ($activePage == 'index') ? 'active':''; ?>'><a href='index.php'>Home</a></li>
        <li class='<?= ($activePage == 'domainhost') ? 'active':''; ?>'><a href='domainhost.php'>Domain & Host</a></li>
        <li class='<?= ($activePage == 'web') ? 'active':''; ?>'><a href='web.php'>Website</a></li>
        <!--<li class='active'><a href='#'>Home</a></li>-->
        <li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Optimization<span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li class='<?= ($activePage == 'opt') ? 'active':''; ?>'><a href='opt.php'>SEO Optimization</a></li>
            <li class='<?= ($activePage == 'update') ? 'active':''; ?>'><a href='update.php'>Analytical Updates</a></li>
          </ul>
        </li>
        <li class='<?= ($activePage == 'about') ? 'active':''; ?>'><a href='about.php'>About</a></li>
        <li class='<?= ($activePage == 'contact') ? 'active':''; ?>'><a href='contact.php'>Contact</a></li>
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='#'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
        <li><a href='#'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Spanish (Mexico)
<link rel="alternate" hreflang="es-mx" href="https://mx.clickonology.com/"/> -->