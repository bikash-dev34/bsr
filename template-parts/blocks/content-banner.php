
	/**
	 * Banner Block Template
	 *
	 * @param  array  $block  The block settings and attributes.
	 * @param  string  $content  The block inner HTML (empty).
	 * @param  bool  $is_preview  True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	 
	 <?php the_post();?>
	 <?php 
$value = get_field( "text_field" );

if( $value ) {
    echo $value;
} else {
    echo 'empty';
;?>
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
<?php } ?>