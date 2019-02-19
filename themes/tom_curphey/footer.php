<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base
 */

?> 

	</div><!-- #content -->
<div id="contact"></div>
<div class="work_form">
  <div class="footer_image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/footer.png)"/>
  </div>                
  <h3 id="footer-title">How can I help you?</h3>
  <form method="POST">
    <div class="form_interest">
      <Label>Please select a main topic</Label>
      <div class="radio_options">
        <input id="form_dev" type="radio" name="interest" value="Front End Design" class="radio"><span>Web Development</span><br>
        <input id="form_funnel" type="radio" name="interest" value="Marketing" class="radio"><span>Sales Funnel Conversion</span><br>
        <input id="form_brand" type="radio" name="interest" value="Design" class="radio"><span>Brand & Marketing</span><br>
        <input id="form_project" type="radio" name="interest" value="Back End Design" class="radio"><span>Project Manager</span><br>
        <input id="form_content" type="radio" name="interest" value="Content Production" class="radio"><span>Content Creation</span><br>
        <input id="form_ads" type="radio" name="interest" value="Content Production" class="radio"><span>Sales & Advertising</span><br>
        <input id="form_model" type="radio" name="interest" value="Content Production" class="radio"><span>Business Model Consultant</span><br>
        <input id="form_print" type="radio" name="interest" value="Content Production" class="radio"><span>Print Media Designer</span><br>
        <input id="form_chat" type="radio" name="interest" value="None I Just Want To Chat" class="radio"><span>None I Just Want To Chat</span><br/>
      </div>
    </div>
    <div class="form_name">
      <Label>Your Name<span>*</span></Label>
      <input id="name" name="name" type="text" onBlur="checkInput(this)"/> 
    </div>
    <div class="form_company">
      <Label>Company Name<span>*</span></Label>
      <input id="company" name="company" type="text" onBlur="checkInput(this)"/>
    </div>
    <div class="form_email">
      <Label>Contact email<span>*</span></Label>
      <input id="email" name="email" type="text" onBlur="checkInput(this)"/> 
    </div>
    <div class="form_phone">
      <Label>Contact Phone Number<span>*</span></Label>
      <input id="phone" name="phone" type="number" onBlur="checkInput(this)" />
    </div>
    <div class="form_desire">
      <Label>What problem are you trying to solve and why?<span>*</span></Label>
      <textarea id="desire" rows="8" name="desire" onBlur="checkInput(this)"></textarea>
    </div>
    <div class="form_objective">
      <Label>Please describe your ideal outcome  <span>*</span><br/></Label>
      <textarea id="objective" rows="8" name="objective" onBlur="checkInput(this)" ></textarea>
    </div>
    <div class="form_url">
      <Label>Any relevant web links we should look at?</Label>
      <input id="url" name="url" type="text" onBlur="checkInput(this)"/>
    </div>
    <div class="form_optin">
      <Label>Consistent service builds trust.</Label>
      <div class="checkbox_options">
        <div class="checkbox">
          <input type="checkbox" name="optin" class="radio" >
        </div>
        <div class="optin">
          <span>Yes stay in contact with me in the future</span>
        </div>
      </div>
    </div>
    <div class="form_button">
      <button type="submit" name="submit" >Send Enquiry</button>
    </div>
  </form>
</div>
<footer class="footer"> 
  <h4>Thank you for taking the time to look over our services</h4>
    <div class="footer-menu">
      <div class="f1">
        <div class="contact_box">
          <a href="<?php echo home_url();?>">Tom Curphey</a>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'tom-menu',
            'menu_id'        => 'tom-menu',
          ) );
          ?>
        </div>
      </div>
      <div class="f2">
        <div class="contact_box">
        <a href="<?php echo home_url('/#services');?>">Services</a>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'service-menu',
            'menu_id'        => 'service-menu',
          ) );
          ?>
        </div>
      </div>
      <div class="f3">
        <div class="contact_box">
        <a href="<?php echo home_url('/#casestudies'); ?>">Case Studies</a>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'case-menu',
            'menu_id'        => 'case-menu',
          ) );
          ?>
        </div>
      </div>
      <div class="f4">
        <div class="contact_box">
          <a href="<?php //echo LinkTo('/contact-us'); ?>">Contact Tom</a>
          <ul>
            <li><a href="mailto:mail@tomcurphey.com" >mail @ tomcurphey.com</a></li>  
            <li><a href="tel:0428438348" >0428 438 348</a></li>    
            <!-- <li class="social"> 
              <a href="http://instagram.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#handshake" />
                  </svg>
                </div>
              </a>
              <a href="http://facebook.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#handshake" />
                  </svg>
                </div>
              </a>
              <a href="http://youtube.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#handshake" />
                  </svg>
                </div>
              </a>
              <a href="http://medium.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#handshake" />
                  </svg>
                </div>
              </a>
            </li>   -->
          </ul>
        </div>
      </div>
    </div>
  <a class="builtby" href="http://www.xenus.com.au">Built By Tom From Xenus 2018</a>
</footer>

<?php wp_footer(); ?>
</body>
</html>
