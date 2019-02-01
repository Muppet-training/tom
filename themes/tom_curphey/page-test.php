<?php
/*
Template Name: Test Sticky
*/
get_header();
?>
  <main id="main_body" onclick="menuCheck();" class="case_study">
    <?php $image = get_template_directory_uri() . '/images/video.png'; ?>
    <section class="case_header" style="background-image: url(<?php echo $image ?>);">
      <?php // get_case_study(get_the_ID()) ?>
      <div class="title_wrapper">
        <div class="title_box">
          <h1>Bay City Burrito</h1>
          <ul>
            <li>Marketing</li>
            <li>Web Design</li>
          </ul>
        </div>
      </div>
    </section>
    <div class="to_make_the_sticky_menu_work_sad_face">
      <section class="case_content">
        <section class="stats"> 
          <ul>
            <li>Engagement: 2018 - Current</li>
            <li>Sales Growth</li>
            <li>Lead Conversion</li>
            <li>Website Traffic</li>
            <li>"Tom is a great asset to our team"</li>
            <li>Hospitality</li> 
          </ul>
        </section>
        <div class="content_wrapper">
          <section class="challenge">
            <h2>The Challenge</h2>
            <ul>
              <li>Increase Revenue</li>
              <li>Optimise Lead conversion</li>
            </ul>
          </section>
          <section class="solution">
            <h2>Solution</h2>
            <ul>
              <li>Fix leaky bucket</li>
              <li>Sync Key Brand Messages</li>
            </ul>
          </section>
          <section class="step">
            <h2>Step By Step</h2>
            <div>
              <ul>
                <li class="step_row">
                  <div class="step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey">
                    <p>Yes</p>
                  </div>
                  <div class="details">
                    <h3>Are we on the same page?</h3>
                    <?php convertToList('Hey D, Hey D, Hey D') ?>
                  </div>
                </li>
                <li class="step_row">
                  <div class="step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey">
                    <p>Time to start measuring</p>
                  </div>
                  <div class="details">
                    <h3>Are we on the same page?</h3>
                    <?php convertToList('Hey D, Hey D, Hey D') ?>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </section>
    </div>
    <section class="hindsight">
      <h2>Hindsight</h2>
      <p>What I learned & How I would approach this sistuation differently next time</p>
      <ul>
        <li>Defining the outcome up front & reviewing it each month was an important step to ensure we are both on the same page</li>
        <li>Outsourcing repeative tasks so I could focus on the value adding tasks as a priority</li>
      </ul>
    </section>
  </main>
<?php 
get_footer();