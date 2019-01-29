<?php
/*
Template Name: Homepage
*/
get_header();
?>
  <main id="main_body">
    <section onclick="menuCheck();" class="header">
      <section class="title">
        <h1>Hi, I'm Tom Curphey</h1>
      </section>
      <section class="into_image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey">
      </section>
    </section>
    <section class="style">
      <div class="wrapper">
        <div class="title">
          <h3>The best communicators change their pitch with context about their audience</h3>
        </div>
        <div class="sub_title">
          <p>I enjoy getting to know how you can create value for my company by:</p>
        </div>
        <ul>
          <li>
            <div><p>svg</p></div>
            <h4>Video</h4>
          </li>
          <li>
            <div><p>svg</p></div>
            <h4>Written Word</h4>
          </li>
          <li>
            <div><p>svg</p></div>
            <h4>Listening</h4>
          </li>
          <li>
            <div><p>svg</p></div>
            <h4>Talking</h4>
          </li>
          <li>
            <div><p>svg</p></div>
            <h4>Overview</h4>
          </li>
          <li>
            <div><p>svg</p></div>
            <h4>Resume</h4>
          </li>
        </ul>
      </div>
    </section>
    <section class="video">
      <div class="wrapper">
        <div class="heading">
          <h2>I’m a problem solver,</br>Who loves developing business models</h2>
        </div>
        <div class="video_link"  onclick="video_overlay();">
          
        </div>
        <div class="intro">
          <p class="overview">
            Marketer by trade, I built websites to test marketing strategies in different industries.
            After launching a successful cafe and running it for 3 years.
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
          <a href="/about-me">More About Me.</a>
        </div>
      </div>
    </section>
    <section id="video_overlay" class="video_overlay">
      <div class="wrapper" onclick="video_overlay();"></div>
      <div class="exit" onclick="video_overlay();">x</div>
      <div class="video">Overlay</div>
    </section>
    <section class="clients">
      <h3>Past Clients</h3>
      <div class="clients_wrapper">
        <ul class="list_wrapper">
          <li>
            <ul id="slideshow1">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey">
              </li>
            </ul>
          </li>
          <li>
            <ul id="slideshow2">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey">
              </li>
            </ul>
          </li>
          <li>
            <ul id="slideshow3">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey">
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </section>
    <section class="case">
        <div class="case_list">
          
          <ul>
            <li>
             <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey"/>
             <div>
               <h3>First Client</h3>
             </div>
            </li>
            <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey"/>
             <div>
               <h3>First Client</h3>
             </div>
            </li>
            <li>
             <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey"/>
             <div>
               <h3>First Client</h3>
             </div>
            </li>
            <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey"/>
             <div>
               <h3>First Client</h3>
             </div>
            </li>
            <li>
             <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey"/>
             <div>
               <h3>First Client</h3>
             </div>
            </li>
            <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/video.png)" alt="Introducing Tom Curphey"/>
             <div>
               <h3>First Client</h3>
             </div>
            </li>
          </ul>
        </div>
    </section>
    <section class="case_wrapper">
      <h3>Case Studies</h3>
      <div></div>
    </section>
  </main>
<?php
get_footer();