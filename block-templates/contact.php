<!-- 
  Template Name:Contact me
 -->

 <?php get_header('new');?>

  
    <!-- Section A: Contact Form -->
    <section id="contact-a" class="text-center py-3">
      <div class="container">
        <h2 class="section-title">Contact Me</h2>
        <div class="bottom-line"></div>
        <p class="lead">Here is how you can reach me</p>
        <form method="POST" data-netlify="true" data-netlify-recaptcha="true">
          <div class="text-fields">
            <input
              type="text"
              class="text-input name-input"
              placeholder="Name"
              name="name"
            />
            <input
              type="text"
              class="text-input subject-input"
              placeholder="Subject"
              name="subject"
            />
            <input
              type="email"
              class="text-input email-input"
              placeholder="Email Address"
              name="email"
            />
            <input
              type="text"
              class="text-input phone-input"
              placeholder="Phone Number"
              name="phone"
            />
            <textarea
              class="text-input message-input"
              placeholder="Enter Message"
              name="message"
            ></textarea>
            <div class="my-2">
              <div data-netlify-recaptcha="true"></div>
            </div>
          </div>
          <button type="submit" class="btn-dark">Submit</button>
        </form>
      </div>
    </section>

    <!-- Section B: Contact Info -->
    <section id="contact-b" class="py-3 bg-dark">
      <div class="container">
        <div class="contact-info">
          <div>
            <i class="fas fa-envelope fa-2x"></i>
            <h3>Email</h3>
            <p>bikashrai7924@gmail.com</p>
          </div>
          <div>
            <i class="fas fa-phone fa-2x"></i>
            <h3>Phone</h3>
            <p>0977-9860939816</p>
          </div>
          <div>
            <i class="fas fa-address-card fa-2x"></i>
            <h3>Address</h3>
            <p>Balaju -16, Kathmandu, Nepal</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section C: Tagline -->
    <section id="contact-c" class="bg-main py-4">
      <div class="container">
        <h1>Let's Start Your Next Project</h1>
      </div>
    </section>

    <!-- footer section -->
    <?php get_footer();?>