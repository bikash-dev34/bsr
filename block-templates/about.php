<!-- Template Name:About me 
-->

<?php get_header('new');?>
  <body>
    <!-- header -->
    
    
     <!-- section A info -->
     <section id="about-a" class="text-center py-3">
         <div class="container">
             <h2 class="section-title">About Me</h2>
            <div class="bottom-line"></div>
            <p class="lead">Here is my introduction</p>
            <div class="about-info">
                <img src="<?php echo get_template_directory_uri().'/assets/img/about.jpg';?>" alt="" class="bio-image">
                <div class="bio bg-light">
                    <h4>Your Project Is In Safe Hands</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel hic cupiditate perferendis consectetur aliquam debitis!</p>
                </div>
                <div class="award-1">
                    <i class="fas fa-award fa-3x"></i>
                    <h3>Award One</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum culpa nemo velit distinctio voluptatum eius tempore eos sint accusamus impedit.</p>
                </div>
                 <div class="award-2">
                    <i class="fas fa-award fa-3x"></i>
                    <h3>Award Two</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum culpa nemo velit distinctio voluptatum eius tempore eos sint accusamus impedit.</p>
                </div>
                 <div class="award-3">
                    <i class="fas fa-award fa-3x"></i>
                    <h3>Award Three</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum culpa nemo velit distinctio voluptatum eius tempore eos sint accusamus impedit.</p>
                </div>
                
            </div>
         </div>
     </section>
     <!-- Section B Progress Bar -->
     <section id="about-b" class="bg-dark py-3">
         <div class="container">
           <h2 class="section-title">Technical Skills</h2>  
           <div class="bottom-line"></div>
           <h4>WordPress</h4>
           <div class="progress">
               <div style="width: 75%;"></div>
           </div>
           <h4>PHP</h4>
           <div class="progress">
               <div style="width: 50%;"></div>
           </div>
           <h4>Javascript</h4>
           <div class="progress">
               <div style="width: 60%;"></div>
           </div>
           <h4>Html & CSS</h4>
           <div class="progress">
               <div style="width: 80%;"></div>
           </div>
         </div>
     </section>
     <!-- Section C logos -->
     <section id="about-c" class="py-4 bg-light">
         <div class="container">
             <div class="about-logos">
                 <img src="<?php echo get_template_directory_uri().'/assets/img/about-logos/logo-envato.png';?>" alt="">
                 <img src="<?php echo get_template_directory_uri().'/assets/img/about-logos/logo-magento.png';?>" alt="">
                 <img src="<?php echo get_template_directory_uri().'/assets/img/about-logos/logo-woocommerce.png';?>" alt="">
                 <img src="<?php echo get_template_directory_uri().'/assets/img/about-logos/logo-wordpress.png';?>" alt="">
                
             </div>
         </div>
     </section>
     <!-- about section d testimonials -->
      <section id="about-d" class="py-4">
          <div class="container">
              <h2 class="section-title">Testimonals</h2>
              <div class="bottom-line"></div>
              <p class="lead text-center">Take a look at what my clients say...</p>
              <div class="testimonials">
                  <div>
                      <p>Lorem ipsum doloerror ab inventore alias quod dolorum sed praesentium pariatur voluptate earum.</p>
                      <ul>
                          <li><img src="<?php echo get_template_directory_uri().'/assets/img/testimonials/person1.jpg';?>" alt=""></li>
                          <li>Jhon Brad,Sydney</li>
                      </ul>
                  </div>
                  <div>
                      <p>Lorem it error ab inventore alias quod dolorum sed praesentium pariatur voluptate earum.</p>
                      <ul>
                          <li><img src="<?php echo get_template_directory_uri().'/assets/img/testimonials/person2.jpg';?>" alt=""></li>
                          <li>Peter Duck, New York</li>
                      </ul>
                  </div>
                  <div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit error ab inventore alias quod dolorum </p>
                      <ul>
                          <li><img src="<?php echo get_template_directory_uri().'/assets/img/testimonials/person3.jpg';?>" alt=""></li>
                          <li>Jack Kim, London</li>
                      </ul>
                  </div>
                  <div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit error ab inventore alias quod dolorum sed </p>
                      <ul>
                          <li><img src="<?php echo get_template_directory_uri().'/assets/img/testimonials/person4.jpg';?>" alt=""></li>
                          <li>Steve Brown,Canada</li>
                      </ul>
                  </div>
              </div>

          </div>
      </section>

    <!-- footer section -->
    <?php get_footer();?>
