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
    <header id="header-inner">
      <div class="container">
        <nav id="main-nav">
          <img src="<?php echo get_template_directory_uri() .'/assets/img/logo2.png';?>" alt="logo" id="logo">
          <ul>
           <li>
            <?php
             wp_nav_menu(array('theme_location'=>'my_main_menu_2',
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
        
      </div>
    </header>
    