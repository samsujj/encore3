<!--menu-->
<?php
  global $user;
  $roles=($user->roles);
  if (array_key_exists(4, $roles)) {


  ?>
<div class="menu-div-body">
                            <ul>
                              <li><a href="<?php echo $GLOBALS['base_url']  ?>">Home</a></li>
                              <li><a href="<?php echo $GLOBALS['base_url']  ?>/node/add/category">Add Category</a></li>
                              <li><a href="<?php echo $GLOBALS['base_url']  ?>/category-listing">Category List</a></li>
                              <li><a href="<?php echo $GLOBALS['base_url']  ?>/node/add/product">Add Product</a></li>
                              <li><a href="<?php echo $GLOBALS['base_url']  ?>/product-admin-list">Product List</a></li>
                              <li><a href="<?php echo $GLOBALS['base_url']  ?>/admin/store/products/attributes">Product Attribute List</a></li>

                               <div class="clear"></div>
                                </ul>
                              <div class="clear"></div>
                         </div>
  <?php } ?>						 
<!--menu-->



<!-- Header [start] -->
<div class="main-wrapper">
<div class="topcontain">
<?php if ($logo): ?>
<div class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div>
<?php endif; ?>


<div class="top-right-contain">
    <?php print render($page[' preface_first']); ?>

  <div class="tright-menu">
      <?php print render($page['header']); ?>

  <?php  global $user;
	if ( !$user->uid ) { ?>
		<a href="<?php echo $GLOBALS['base_url']  ?>/user/login">Login</a>    
  <?php }else{ ?>
		<a href="<?php echo $GLOBALS['base_url']  ?>/user/logout">Log Out</a> 
			<?php 
			$roles=($user->roles);
			if (array_key_exists(5, $roles)) {?>
		<!--<a href="<?php /*echo $GLOBALS['base_url']  */?>/user/<?php /*echo $user->uid;*/?>/orders">My Order</a> -->
  <?php }} ?>
  <a href="<?php echo $GLOBALS['base_url']  ?>/Satisfaction-Guarantee">Satisfaction Guarantee</a>    <a href="#" class="typemenu">US-English</a> <a href="#" class="cartmenu">Cart <span>(00)</span></a>
  </div>
  <div class="clear"></div>
    <?php print render($page['content_top']); ?>




  <div class="search-contain">

      <?php  global $user;
      if ( $user->uid ) { ?>

     <div class="account-menu"> <a href="#">My Account</a></div>

      <?php }?>
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
      <ul>

 <li> <span><a href="#">Go To My Store </a> </span>
<ul>
    <li>
  <div class="image_menu">
      <?php
      $block = block_load('views', 'category_navigation-block');
      $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
      print $output;
      ?>
  </div>
    </li>
</ul>
 </li>
          <li><a href="<?php echo $GLOBALS['base_url']  ?>/products/2">Home Life  </a> </li>

          <li><a href="<?php echo $GLOBALS['base_url']  ?>/products/3"> Allure3  </a> </li>
          <li><a href="<?php echo $GLOBALS['base_url']  ?>/products/4">Tech-Link </a> </li>
          <li><a href="<?php echo $GLOBALS['base_url']  ?>/products/5"> Nature’s Synergy  </a> </li>



      </ul>
      <div class="clear"></div>

  </div>

</div>
<!-- Menu [end] -->

<!-- Content [Start] -->
<div class="main-wrapper">
<?php print render($page['content']); ?>
</div>
<!-- Content [end] -->

<div class="distributor-main">


    <div class="distributor-left">
        <h2>Join As A Distributor</h2>



        <ul>

            <li>  <a href="#" class="joinnow">Join Now</a></li>

            <li>




        <a href="#" class="cartbtn">Go To My Store</a>


                <ul>

                    <li> <div class="image_menu">
                            <?php
                            $block = block_load('views', 'category_navigation-block');
                            $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
                            print $output;
                            ?>
                        </div></li>
                </ul>

            </li>

        </ul>

       <div class="bottom-img"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/bottomimage.png"  alt="#"/></div>



    </div>



    <div class="clear"></div>
</div>



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
  <a href="<?php echo $GLOBALS['base_url']  ?>/eCatalog">eCatalog </a>
  <a href="<?php echo $GLOBALS['base_url']  ?>/Contact-Us"> Contact Us</a>
  <a href="<?php echo $GLOBALS['base_url']  ?>/Newsletters"> Newsletter</a>
  <a href="<?php echo $GLOBALS['base_url']  ?>/Email-Sign-Up">Email Signup </a>
  <a href="<?php echo $GLOBALS['base_url']  ?>/DSA-Code_of_Ethics ">DSA Code of Ethics  </a>
  <a href="<?php echo $GLOBALS['base_url']  ?>/Privacy-Policy">Privacy Policy</a>
  
  </div>
  
    <div class="clear"></div>
  </div>

</div>
<!-- Footer [end] -->