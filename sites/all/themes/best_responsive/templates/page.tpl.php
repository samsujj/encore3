<!-- Header [start] -->
<div class="main-wrapper">
<div class="topcontain">
<?php if ($logo): ?>
<div class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div>
<?php endif; ?>


<div class="top-right-contain">
  <div class="tright-menu">
  <?php  global $user;
	if ( !$user->uid ) { ?>
		<a href="<?php echo $GLOBALS['base_url']  ?>/user/login">Login</a>    
  <?php }else{ ?>
		<a href="<?php echo $GLOBALS['base_url']  ?>/user/logout">Log Out</a>    
  <?php } ?>
  <a href="#">Satisfaction Guarantee</a>    <a href="#" class="typemenu">US-English</a>
  </div>
  <div class="clear"></div>
  
  <div class="left-menu">
  <a href="#">Shop</a>     <a href="#">About Us</a>     <a href="#">Opportunity</a>
  
  </div>
  
  <div class="search-contain">
   <div class="search-main">
     <input type="text"  placeholder="Search Products" />
     
     <input type="submit"  value="" />
     
     
   </div>
  
  </div>

<div class="clear"></div>
</div>

<div class="clear"></div>

</div>

</div>
<!-- Header [end] -->


<!-- Menu [start] -->

<div class="menu-contain">
  <div class="main-wrapper">
 <a href="#"> Nature’s Synergy  </a>                             
 <a href="#"> Nopal Activ  </a>                                           
 <a href="#"> Beauty  </a>                                            
 <a href="#">Home Life  </a>                                            
 <a href="#">Tech-Link </a>             
  
  </div>

</div>
<!-- Menu [end] -->

<!-- Content [Start] -->
<div class="main-wrapper">
<?php print render($page['content']); ?>
</div>
<!-- Content [end] -->

<!-- Footer [start] -->
<div class="main-wrapper">
  <div class="footer-contain">
     <div class="footer-left">
       <span>Follow</span>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i1.png"  alt="#"/></a>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i2.png"  alt="#"/></a>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i3.png"  alt="#"/></a>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i4.png"  alt="#"/></a>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i5.png"  alt="#"/></a>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i6.png"  alt="#"/></a>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i7.png"  alt="#"/></a>
       <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/i8.png"  alt="#"/></a>
       
        
    <div class="clear"></div>
     </div>
  
  
  <div class="footer-menu">
  <a href="#">eCatalog </a>           
  <a href="#"> Contact Us</a>            
  <a href="#"> Newsletter</a>             
  <a href="#">Email Signup </a>            
  <a href="#">DSA Code of Ethics  </a>           
  <a href="#">Privacy Policy</a>
  
  </div>
  
    <div class="clear"></div>
  </div>

</div>
<!-- Footer [end] -->