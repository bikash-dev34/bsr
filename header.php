<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    
    <?php wp_head();?>
  </head>
  <body>
    <!-- header -->
    <header id="header-home">
      <div class="container">
        <nav id="main-nav">
          <img src="<?php echo get_template_directory_uri() .'/assets/img/loko.png';?>" alt="logo" id="logo">
          <ul>
           <li>
            <?php
             wp_nav_menu(array('theme_location'=>'my_main_menu_here',
             'depth'=>2,
             'container'=>'nav',
             'menu_id'=>'',
             'menu_class'=>'main-menu',
             'add_li_class'=>''
             )
             );?>
             </li>
          </ul>
        </nav>
        <div class="header-content">
          <h1>
            I Am Bikash Rai
            <span
              class="txt-type"
              data-wait="3000"
              data-words='["Software Developer","WordPress Developer","Software
            Engineer"]'
            ></span>
          </h1>
          <p class="lead">
            I specialze in WordPress, Javascript, Php, Css and Html
          </p>
          <a href="work.html" class="btn-light">View my Work</a>
        </div>
      </div>
    </header>