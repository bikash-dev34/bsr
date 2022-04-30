<?php
add_action('acf/init','bsr_theme_init_block_types');
function bsr_theme_init_block_types(){
    //check functiions exists
    if(function_exists('acf_register_block_type')){
        //register a banner block
        acf_register_block_type(array(
            'name'=>'bsr-theme-banner',
            'title'=>__('Banner Main'),
            'description'=>__('A custom block banner'),
            'render_callback'=>'bsr_theme_render_callback',
            // 'render_template'=>'template-parts/blocks/content-banner.php',
            'category'=>'bsr-blocks',
            'icon'=>'embed-photo',
            'keywords'=>array('banner','hero'),
            'mode'=>'edit',
            'supports'=>array('mode'=>'false','align'=>false,),
        ));
    }
}