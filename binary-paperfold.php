<?php
/*
Plugin Name: Binary Paperfolded Posts
Plugin URI: http://www.plugins.binarygeometry.net/
Version: 1.0.0
Author: Andrew MacKay
Description: Adds paperfold functionality as Wordpress posts snippet. Made possible by the third party code developed at: https://developer.mozilla.org/en-US/demos/detail/paperfold-css..
*/
?>
<?php

  function fold_post_shortcode( $atts, $content = null ) {  
    return '
    </div>
      </div>
        <div class="pf__trigger pf__trigger_collapsed">
            <span class="pf__trigger-text pf__trigger-text_collapsed">Expand &rarr;</span>
            <span class="pf__trigger-text pf__trigger-text_expanded">&larr; Collapse</span>
        </div>

        <div class="pf__full">
            <div class="pf__reducer">
                <!-- Long/expandable content -->
    '; // end return
  }

  add_shortcode('fold_post', 'fold_post_shortcode'); 


  class FoldingPost {
    public function fold_post(){
      include 'paperfold-single-post.php';
    }
  }

  function folding_post()  {  
      $foldingPost = new FoldingPost;  
      echo $foldingPost->fold_post();  
  } 

  function binary_paperfold_scripts() {
    wp_register_script( 'modernizr', plugins_url( '/paperfold/js/modernizr.paperfold.js', __FILE__ ),
      null, null, false );
    wp_enqueue_script( 'modernizr' );
     
    wp_register_script( 'prefixfree', plugins_url( '/paperfold/js/prefixfree.js', __FILE__ ),
      null, null, false );
    wp_enqueue_script( 'prefixfree' );

    wp_register_script( 'paperfold', plugins_url( '/paperfold/js/jquery.paperfold.js', __FILE__ ),
      array('jquery'), null, true );
    wp_enqueue_script( 'paperfold' );

    // run the paperfold code
    wp_register_script( 'paperfoldedposts', plugins_url( '/paperfold/js/paper-folded-posts.js', __FILE__ ),
      array('jquery'), null, true );
    wp_enqueue_script( 'paperfoldedposts' );

    wp_register_style('paperfoldcss', plugins_url('paperfold/css/paperfold.css',__FILE__ ));
    wp_enqueue_style('paperfoldcss');
  }

  add_action( 'wp_enqueue_scripts', 'binary_paperfold_scripts' );

?>
