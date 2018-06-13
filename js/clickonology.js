/* JavaScript Document
/////////////////////////////////////////
// COMPANY : Clickonology              // 
// PROJECT : Clickonology Responsive   //
// FILE    : clickonology.js           //
// CREATED : Nov 26 2016               //
// MODIFIED :                          //
/////////////////////////////////////////
 */

/*displayId function is sent the id tag content with "element" which displays it in the console.log as the element id*/
//https://www.youtube.com/watch?v=dRLOHxyCaGU
$(function() {

    //highlight the current nav - not needed cos css Bootstrap does all this. . . 
    //if the page id is #index, find the a tag named Index. find the parent. add class active
    //  <          handler          >
    //$("#index a:contains('Index')").parent().addClass('active');
    //$("#photographer_pack a:contains('Photographer\'s Package')").parent().addClass('active');    

    //if you find and id opt that contains an 'a' tag that contains 'SEO Optimization' 
    //and it's parent (Optimization) HAS CLASS ACTIVE   
    if($("#opt a:contains('SEO Optimization')").parent().hasClass('active')){ /*page clicked, so active*/
    //if CLASS dropdown contains 'Optimization'. to it's parent. add class active
    $(".dropdown a:contains('Optimization')").parent().addClass('active'); /*dropdown of page, make active*/
    }
    if($("#update a:contains('Analytical Updates')").parent().hasClass('active')){
    $(".dropdown a:contains('Optimization')").parent().addClass('active');
    }

    //make menus drop automatically
    //if you find a ul with the class of 'nav' and an li with the class of 'dropdown'. when hovering
    $('ul.nav li.dropdown').hover(function() {
        //dropdown-menu, this (One hover is on). fade in        
        $('.dropdown-menu', this).fadeIn();
    }, function() {
        $('.dropdown-menu', this).fadeOut('fast');
    });//hover
	
}); //jQuery is loaded
    
    /*if($("#photographer_pack a:contains('Photographer\'s Package')").parent().hasClass('active')){
    $(".dropdown a:contains('Our Programs')").parent().addClass('active');
    }
    
    if($("#joomla a:contains('Joomla Training')").parent().hasClass('active')){
    $(".dropdown a:contains('Our Programs')").parent().addClass('active');
    }

    //make menus drop automatically
    $('ul.nav li.dropdown').hover(function() {
            $('.dropdown-menu', this).fadeIn();
    }, function() {
            $('.dropdown-menu', this).fadeOut('fast');
    });//hover
	
}); //jQuery is loaded*/