<?php 
function bsr_theme_block_category($categories, $post){
        return array_merge(
            $categories,
            array(
                array(
                'slug'=>'bsr-blocks',
                'title'=>__('BSR Blocks','bsr-blocks'),
            ),

            )
            
        );

}
add_filter('block_categories','bsr_theme_block_category',10,2);