<?php
// Add CSS variables and enqueue the style
function my_plugin_settings_enqueue_scripts() {
  wp_enqueue_style( 'my-plugin-style', plugins_url( 'style.css', __FILE__ ) );
  ?>
  <style>
    :root {
      /* Column Colors*/
      --column-hover: <?php echo get_option( 'my-plugin-column-hover', '#f3d5a5' ); ?>;
      --column-selected: <?php echo get_option( 'my-plugin-column-selected', '#ada290' ); ?>;
      
      /* Price Colors*/
      --price-background: <?php echo get_option( 'my-plugin-price-bg', '#e6c693' ); ?>;
      --price-font: <?php echo get_option( 'my-plugin-price-font', '#fff' ); ?>;
      --price-bg-hover: <?php echo get_option( 'my-plugin-price-bg-hover', '#fff' ); ?>;
      --price-font-hover: <?php echo get_option( 'my-plugin-price-font-hover', '#e6c693' ); ?>;
      --price-bg-selected: <?php echo get_option( 'my-plugin-price-bg-selected', '#e6c693' ); ?>;
      --price-font-selected: <?php echo get_option( 'my-plugin-price-font-selected', '#fff' ); ?>;
      
      /*Font and Cont Colors*/
      --font-hover: <?php echo get_option( 'my-plugin-font-hover', '#2e2e2e' ); ?>;
      --font-selected: <?php echo get_option( 'my-plugin-font-selected', '#fff' ); ?>;
      --font-checked: <?php echo get_option( 'my-plugin-font-checked', '#d6d6d6' ); ?>;
    }
  </style>
  <?php
}
add_action( 'admin_enqueue_scripts', 'my_plugin_settings_enqueue_scripts' );
