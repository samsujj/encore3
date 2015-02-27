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


    <div class="distributor-right">

        <h2>I Want To Speak With You
            We Can Talk About Our Company</h2>


<!-- contact-->
        <div class="form-block-contain">
            <div class="form-main">
                <p>Want To Hear From A Representative?
                    Fill this out now!</p>
                <form class="node-form node-contactus-form" action="/encore/products/2" method="post" id="contactus-node-form" accept-charset="UTF-8"><div><div class="form-item form-type-textfield form-item-title">
                            <label for="edit-title"> <span class="form-required" title="This field is required.">*</span></label>
                            <input placeholder="First Name" id="edit-title" name="title" value="" size="60" maxlength="255" class="form-text required" type="text">
                        </div>
                        <div class="field-type-text field-name-field-last-name field-widget-text-textfield form-wrapper" placeholder="Last Name" id="edit-field-last-name"><div id="field-last-name-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-last-name-und-0-value">
                                    <label for="edit-field-last-name-und-0-value">Last Name <span class="form-required" title="This field is required.">*</span></label>
                                    <input placeholder="Last Name" class="text-full form-text required" id="edit-field-last-name-und-0-value" name="field_last_name[und][0][value]" value="" size="60" maxlength="255" type="text">
                                </div>
                            </div></div><div class="field-type-text field-name-field-email field-widget-text-textfield form-wrapper" id="edit-field-email"><div id="field-email-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-email-und-0-value">
                                    <label for="edit-field-email-und-0-value">Email <span class="form-required" title="This field is required.">*</span></label>
                                    <input placeholder="Email Address" class="text-full form-text required" id="edit-field-email-und-0-value" name="field_email[und][0][value]" value="" size="60" maxlength="255" type="text">
                                </div>
                            </div></div><div class="field-type-text field-name-field-phone-no field-widget-text-textfield form-wrapper" id="edit-field-phone-no"><div id="field-phone-no-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-phone-no-und-0-value">
                                    <label for="edit-field-phone-no-und-0-value">Phone No <span class="form-required" title="This field is required.">*</span></label>
                                    <input placeholder="Phone No" class="text-full form-text required" id="edit-field-phone-no-und-0-value" name="field_phone_no[und][0][value]" value="" size="60" maxlength="255" type="text">
                                </div>
                            </div></div><input name="changed" value="" type="hidden">
                        <input name="form_build_id" value="form-Og6zTc7JapefShJA6DmhOtHSmrnyEtSJjRyIVdrYhlk" type="hidden">
                        <input name="form_token" value="o9g_ZkHHTgjM1p-_RaIKqIt7L9r1d6cyMmeBmWUz9ww" type="hidden">
                        <input name="form_id" value="contactus_node_form" type="hidden">
                        <h2 class="element-invisible">Vertical Tabs</h2><div class="vertical-tabs-panes vertical-tabs-processed"><input class="vertical-tabs-active-tab" name="additional_settings__active_tab" value="" type="hidden">
                        </div><div class="form-actions form-wrapper" id="edit-actions"><input id="edit-submit" name="op" value="Save" class="form-submit" type="submit"></div></div></form>
            </div>

        </div>

        <!-- contact end -->

        <!-- blog-->

        <div class="blog-contain">

           <h3> “Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</h3>
            <h4>Date : September 17th | Author : Lorem Ipsum | Comments : 0</h4>


            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut blandit magna. Donec erat enim, interdum a gravida non.

            <div class="clear"></div>
            <a href="#" class="read-more">Read More &NestedGreaterGreater;</a>

            <div class="icon-div">
                <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s1.png"  alt="#"/></a>
                <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s2.png"  alt="#"/></a>
                <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s3.png"  alt="#"/></a>

            </div>
            <div class="clear"></div>

        </div>

        <div class="blog-contain">

            <h3> “Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</h3>
            <h4>Date : September 17th | Author : Lorem Ipsum | Comments : 0</h4>

            <img src="<?php  echo  base_path() . path_to_theme(); ?>/images/blog.png"  alt="#" class="blog-pic"/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut blandit magna. Donec erat enim, interdum a gravida non.
            <div class="clear"></div>

            <a href="#" class="read-more">Read More &NestedGreaterGreater;</a>

            <div class="icon-div">
                <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s1.png"  alt="#"/></a>
                <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s2.png"  alt="#"/></a>
                <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s3.png"  alt="#"/></a>

            </div>
            <div class="clear"></div>

        </div>


        <!-- blog end -->


    </div>





    <div class="clear"></div>
</div>



<div class="new-banner1">

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac euismod leo. Etiam vitae eros mauris. Duis at ipsum ut
    ipsum interdum blandit vitae eget mi. Mauris vitae augue commodo, porta mi et, egestas diam.

    <span>- @loremipsum</span>
</div>


<div class="new-banner2">
    <div class="banner-text">

    <h2>Lorem Ipsum Dolor Sit Amet</h2>

    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac euismod leo.</h3>

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut blandit magna. Donec erat enim, interdum
    a gravida non, porta vel ipsum. Morbi sit amet commodo nisl. Sed nec ante elit.

    </div>
</div>


<div class="socialfeeds">
    <h2>Social Feeds</h2>

    <div class="s-icon">
    <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s4.png"  alt="#"/></a>
    <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s5.png"  alt="#"/></a>
    <a href="#"><img src="<?php  echo  base_path() . path_to_theme(); ?>/images/s6.png"  alt="#"/></a>
    </div>
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