<?php
/*
Template Name: Homepage
*/
get_header();
?>
  <main onclick="menuCheck();" id="main_body">
    <section  class="header">
      <section class="title" id="quick-add">
        <h1 id='quick-add-data'>Hi, I'm Tom Curphey</h1>
      </section>
      <section class="into_image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clear.png)" alt="Introducing Tom Curphey">
      </section>
    </section>
    <section class="style">
      <div class="wrapper">
        <div class="title">
          <h3>The best communicators change their pitch with context about their audience</h3>
        </div>
        <div class="sub_title">
          <p>I'd like to get to know you by:</p>
        </div>
        <form onSubmit="http://localhost:8888/tom/wp-json/votes/v1/update/6" method="POST">
        <ul>
          <li id="web" onclick="smoothContactScroll(document.getElementById('contact'))">
            <div class="circle">
              <svg class="svg_icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#question-1" />
              </svg>
              <div class="percentage"><p id="speak" >21</p><span>%</span><span id="speak_votes">12</span></div>
            </div>
            <h4>Speaking With You</h4>
          </li>
          <li id="web" onclick="video_overlay();" >
            <div class="circle">
              <svg class="svg_icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#film" />
              </svg>
              <div class="percentage"><p id="video" >17</p><span>%</span><span id="video_votes">12</span></div>
            </div>
            <h4>Video</h4>
          </li>
          <li>
            <a href="<?php echo home_url('about#my-story');?>">
              <div class="circle">
                <svg class="svg_icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#notebook" />
                </svg>
                <div class="percentage"><p id="read" >11</p><span>%</span><span id="read_votes">12</span></div>
              </div>
              <h4>Reading</h4>
            </a>
          </li>
          <li id="web" onclick="smoothMeetingScroll(document.getElementById('contact'))">
            <div class="circle">
              <svg class="svg_icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#conversation" />
              </svg>
              <div class="percentage"><p id="meet" >28</p><span>%</span><span id="meet_votes">12</span></div>
            </div>
            <h4>Meeting In Person</h4>
          </li>
          <li>
            <a href="<?php echo home_url('pdf/tom-curphey-resume-2019.pdf');?>" target="_blank">
            <div class="circle">
              <svg class="svg_icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#curriculum" />
              </svg>
              <div class="percentage"><p id="resume" >9</p><span>%</span><span id="resume_votes">12</span></div>
            </div>
            <h4>Resume</h4>
            </a>
          </li>
          <li>
            <!-- onclick="getParent.call(this,event)"> -->
            <button id="overview" class="circle" type="submit" value="overview">
              <svg class="svg_icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#align" />
              </svg>
              <div class="percentage"><p id="overview" >14</p><span>%</span><span id="overview_votes">12</span></div>
            </button>
            <h4>Glance At Skills</h4>
          </li>
        </ul>
        </form>
      </div>
      <div id="new_text"></div>
    </section>
    <section class="video">
      <div class="wrapper">
        <div class="heading">
          <h3>I’m a problem solver,</br>Who loves developing business models</h3>
        </div>
        <div class="video_link"  onclick="video_overlay();">
          <i class="fab fa-youtube" onclick="video_overlay();"></i>
        </div>

        <div class="intro">
          <p class="overview">
            Marketer by trade, then I started building websites to understand how the technology we communicate with works. 
            A health dessert website grew into a cafe & catering business.. After operating the cafe for 3 years,
            I now am setting my sights on helping businesses grow with my unique skillset:
          </p>
          <ul>
            <li>
              <i class="fas fa-code"></i>
              <p>Business models development to optimally increase revenue</p>
            </li>
            <li>
              <i class="fas fa-code"></i>
              <p>Plan & execute a coherant marketing strategy across all media channels</p>
            </li>
            <li>
              <i class="fas fa-code"></i>
              <p>Design & build web assets to assits in business grow or scaling sales funnel conversion</p>
            </li>
          </ul>
          <a href="<?php echo home_url('about') ?>">More About Me.</a>
        </div>
      </div>
    </section>
    <section id="video_overlay" class="video_overlay">
      <div class="wrapper" onclick="video_overlay();"></div>
      <div class="exit" onclick="video_overlay();">x</div>
      <div class="video">
        <iframe width="350" height="620" src="https://www.youtube.com/embed/bie-CsHZLJ8" frameborder="0" allowfullscreen=""></iframe>
      </div>
    </section>
    <section id="contact_overlay" class="contact_overlay">
      <div class="wrapper" onclick="contact_overlay();"></div>
      <div class="exit" onclick="contact_overlay();">x</div>
      <div class="contact_box">
        <ul>
          <li>
            <div>
              <a href="https://www.linkedin.com/in/tomcurphey/" target="_blank">
                <svg class="svg_icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#linkedin" />
                </svg>
              </a>
            </div>
            <div>
              <a href="https://www.linkedin.com/in/tomcurphey/" target="_blank">  
                Tom Curphey
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="tel:04284348348" target="_blank">
                <svg class="svg_icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#talking" />
                </svg>
              </a>
            </div>
            <div>
              <a href="tel:04284348348" target="_blank">  
                0428 438 348
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="skype:username?call" target="_blank">
                <svg class="svg_icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#skype" />
                </svg>
              </a>
            </div>
            <div>
              <a href="skype:tom_curphey?chat" target="_blank">  
                tom_curphey
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="mailto::mail@tomcurphey.com" target="_blank">
                <svg class="svg_icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arroba" />
                </svg>
              </a>
            </div>
            <div>
              <a href="mailto::tom@tomcurphey.com" target="_blank">  
                mail@tomcurphey.com
              </a>
            </div>
          </li>
          <li>
            <div>
              <svg class="svg_icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#wechat" />
              </svg>
            </div>
            <div>#tomcurphey</div>
          </li>
        </ul>
      </div>
    </section>
    <section class="clients">
      <!-- <h3>Past Clients</h3> -->
      <!-- <div class="clients_wrapper">
        <?php //getClientLogos(); ?>
      </div> -->
    </section>
    <section id="casestudies"></section>
    <section class="case">
        <div class="case_list">
          <?php 
          echo get_featured_case_studies();
          ?>
        </div>
    </section>
    <section class="case_wrapper">
      <h2>Case Studies</h2> 
      <div></div>
    </section>
    <section id="services"></section>
    <section class="services">
      <div class="inner_services">
        <h2>Services</h2>
        <ul class="list_services">
          <!-- <li id="web" onclick="smoothDevScroll(document.getElementById('contact'))"> -->
          <li id="web-developer-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'dev')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/webdev.png);"></div>
            <div>
              <h4>Web Developer</h4>
              <ul class="web_list">
                <li><p>A website is your opportunity to communicate your message globally</p></li>
                <li><p>I love to understand your business model first so I can design the site around your key brand messages</p></li>
                <li><p>Front end development is my foundation as I move towards a javascript fullstack skillset</p></li>
              </ul>             
            </div>
          </li>
          <li id="sales-funnel-conversion-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'funnel')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/funnel300.png);"></div>
            <div>
              <h4>Sales Funnel Conversion</h4>
              <p>Just like a coffee.. Consistency & attention to details keeps the customer coming back.</p>
            </div>
          </li>
          <li id="brand-and-marketing-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'brand')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/brand300.png);"></div>
            <div>
              <h4>Brand & Marketing</h4>
              <p>Branding is a form of identification, how do you connect with the customer while giving them a form of identity?</p>
            </div>
          </li>
          <li id="project-manager-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'project')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/project300.png);"></div>
            <div>
              <h4>Project Manager</h4>
              <p>Passionate about your craft? Let me manage the project to increase sales & maximise your productivity.</p>
            </div>
          </li>
          <li id="content-creation-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'content')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/content300.png);"></div>
            <div>
              <h4>Content Creation</h4>
              <p>I have a team of content producers from videographers to a full inhouse editing team.</p>
            </div>
          </li>
          <li id="sales-and-advertising-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'ads')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/sales300.png);"></div>
            <div>
              <h4>Sales & Advertising</h4>
              <p>LISTEN! The customer will tell you everyting if you stop talking to understand their perspective.</p>
            </div>
          </li>
          <li id="business-model-consultant-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'model')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/model300.png);"></div>
            <div>
              <h4>Business Model Consultant</h4>
              <p>You are either creating or selling.. I love optimising value exchange, to improve the customers expereince while reducing your workload.</p>
            </div>
          </li>
          <li id="print-media-design-service" onclick="smoothServiceScroll(document.getElementById('contact'), 'print')">
            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/print300.png);"></div>
            <div>
              <h4>Print Media Design</h4>
              <p>Contextually relevant signage still plays a key role during in the sales expereince, from menu designs to posters, every touch point counts.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>


    
  </main>
<?php
get_footer();