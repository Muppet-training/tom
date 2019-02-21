<?php
/*
Template Name: About
*/
get_header();
?>
  <main onclick="menuCheck();" onLoad="checkURL();" id="main_body" class="about">
    <section class="about_header">
      <div class="inner_header">
        <div class="video">
          <div onclick="video_overlay();" class="inner_video" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/about.jpg);">
          
          </div>
          <i class="fab fa-youtube" onclick="video_overlay();"></i>
        </div>
        <div class="intro">
          <h1>About Tom Curphey</h1>
          <p>If you're just curious about my story, or you just want to grab my résumé, you're in the right spot.</p>
          <ul>
            <li class="left" onclick="smoothAboutScroll(document.getElementById('separator'))">
              <div class="outer"><div class="inner">
              <img src="<?php echo get_template_directory_uri(); ?>/images/leaf.png" alt="Introducing Tom Curphey">
              </div></div>
              <a href="#" class="ribbon_link"><span class="ribbon">
                <span class="ribbon-stitches-top"></span>
                <strong class="ribbon-content">
                  <span class="link_title">My Story</span>
                </strong>
                <span class="ribbon-stitches-bottom"></span>
              </span>
              </a>
            </li>
            <li class="right">
              <a target="_blank" href="<?php echo home_url('/pdf/tom-curphey-resume-2019.pdf');?>">
              <div class="outer"><div class="inner">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pencilcc.png" alt="Introducing Tom Curphey">
              </div></div>
              <a href="#" class="ribbon_link"><span class="ribbon">
                <span class="ribbon-stitches-top"></span>
                <strong class="ribbon-content">
                  <span class="link_title">My Resume</span>
                </strong>
                <span class="ribbon-stitches-bottom"></span>
              </span>
              </a>
              </a>
            </li>
          </ul>
        </div>
        <section class="quote">
          <h2>An athlete's mindset is focused on beating their personal best.
          I eat, sleep & train like an athlete to compete with my best!
          </h2>
        </section>
      </div>
    </section>
    <section id="video_overlay" class="video_overlay">
      <div class="wrapper" onclick="video_overlay();"></div>
      <div class="exit" onclick="video_overlay();">x</div>
      <div class="video">
      <iframe width="350" height="620" src="https://www.youtube.com/embed/bie-CsHZLJ8" frameborder="0" allowfullscreen=""></iframe>
      </div>
    </section>
    <section id="my-story">
    <section id="separator"></section>
      <section class="overview">
        <div>
          <h3>Overview</h3>
          <ul>
            <li>Fasinated by how things worked and <span>why</span> they worked in that way</li>
            <li>The gym become my second home as I strived to understand my potential</li>
            <li>Communication & Sales sparked my curiosity</li>
            <li>Web development gave me a creative outlet to refine my craft</li>
            <li>A side project turned into a 3 year foodie adventure</li>
            <li>Combining my 3 areas of passion to help optimise business models</li>
          </ul>
        </div>
        <div>
          <img class="round_border" src="<?php echo get_template_directory_uri(); ?>/images/listen.png);" alt="Tom">
        </div>
      </section>
      <section class="stages">
        <div class="inner_stage">
          <h3>My Story</h3>
          <ul>
            <li>
              <div class="stage_text">
                <p>As soon as I could talk I was always asking ‘How’ & ‘Why’ questions. For as long as I can remember I have always had a burning curiosity to want to understand things. At first I was just curious, these days I’m focused on creating solutions in the most optimal way possible. Asking why things are the way they are often leads to a more cohesive solution</p>
              </div>
              <div class="stage_image">
                <img class="round_border" src="<?php echo get_template_directory_uri(); ?>/images/lego.png);" alt="Tom">
              </div> 
            </li>
            <li>
              <div class="stage_text">
                <p>To an outsider going to the gym doesn’t make sense.. For me the gym is where practice discipline, persistence, empathy, patience, & listening. The gym taught me that the human body is more capable than I thought “How much more could I achieve” was the question. Which lead to a passion about understanding the human body to optimse my performance, so I can compete with my best!</p>
              </div>
              <div class="stage_image">
                <img class="round_border" src="<?php echo get_template_directory_uri(); ?>/images/gym.png);" alt="Tom">
              </div> 
            </li>
            <li>
              <div class="stage_text">
                <p>During my gap year I was a personal trainer on a cruise ship in the Caribbean, my daily task was to sell questionable detox products. One day I sold $3650 worth of detox products to a man using emotion based selling techniques. This really made me question the power of selling, communication & brand positioning so much that when I came home I decided to study marketing to understand this subject more. My curiosity about this topic has lead me to work on projects at all stages of the sales funnel.</p>
              </div>
              <div class="stage_image">
                <img class="round_border" src="<?php echo get_template_directory_uri(); ?>/images/ship.png);" alt="Tom">
              </div> 
            </li>
            <li>
              <div class="stage_text">
                <p>While at university studying my marketing degree, I started building websites to understand how the technology that we communicate with was built.  I immediately become hooked by it’s freedom to create user experiences & ability to track the users sales process. I started building websites for friends and creating my own side projects to improve my skills & test the marketing techniques I was being taught.</p>
              </div>
              <div class="stage_image">
                <img class="round_border" src="<?php echo get_template_directory_uri(); ?>/images/uni.png);" alt="Tom">
              </div> 
            </li>
            <li>
              <div class="stage_text">
                <p>I built a healthy dessert recipe website as I wanted to capture the consumers attention, while communicating the benefits if eating healthier. People immediately loved the idea however they wanted to just eat the recipe rather than make it themselves. After catering to a large function from a home kitchen, I knew I had enough demand to move into a commercial premise. This was the birth of Fed Up Project a cafe dedicated to inspiring people to eat healthier.</p>
              </div>
              <div class="stage_image">
                <img class="round_border" src="<?php echo get_template_directory_uri(); ?>/images/fedup.png);" alt="Tom">
              </div> 
            </li>
            <li>
              <div class="stage_text">
                <p>In the cafe I loved designing the revenue models to optimising the sales funnel experience. Combining Marketing, Website Programming & Business Development to generate as much profit as I could. Now days my unique skill set allows me to work on projects that make me feel more fulfilled than ever before. Because I know the skills that I provide are truly valued in a business development environment.</p>
              </div>
              <div class="stage_image">
                <img class="round_border" src="<?php echo get_template_directory_uri(); ?>/images/talk.png);" alt="Tom">
              </div> 
            </li>
          </ul>
        </div>
      </section>
    </section>
    <section class="quote values">
      <h2>My values</h2>
      <p>Ask me about my values when you meet me</p>
      <ul>
        <li>Farmer Mindset</li>
        <li>Fuel > Fire</li>
        <li>Regret Assassin</li>
        <li>No Rules, No Game</li>
        <li>Adapt || Die</li>
        <li>Consistency > Intensity</li>
        <li>I'm a cheap Heart Surgeon</li>
        <li>Idea Challenger</li>
      </ul>
    </section>
  </main>
<?php
get_footer();