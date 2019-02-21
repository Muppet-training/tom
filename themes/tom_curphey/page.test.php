<?php
/*
Template Name: Test Page
*/
get_header();
?>

<div id="page" class="site test" >

  <section  class="parent">
    <section class="in-between-parent">
      <section class="in-between-parent">
        <section id="parent" class="in-between-parent">
          
        </section>
      </section>
    </section>
  </section>
  <div class="anotherparent">
    <div onclick="ChangeParent();">Click Me</div>
  </div>


<?php
get_footer();