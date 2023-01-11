<?php

add_action( 'admin_init', 'my_plugin_colors_update' );

register_setting( 'my_plugin_colors', 'my_plugin_colors', 'my_plugin_colors_validate' );

add_settings_section( 'my_plugin_colors_section', 'My Plugin Colors', '', 'my_plugin_colors' );

add_settings_field( 'column_background', 'Column Background Color', 'column_background_callback', 'my_plugin_colors', 'my_plugin_colors_section' );
add_settings_field( 'column', 'Column Color', 'column_callback', 'my_plugin_colors', 'my_plugin_colors_section' );
add_settings_field( 'column_selected', 'Selected Column Color', 'column_selected_callback', 'my_plugin_colors', 'my_plugin_colors_section' );
add_settings_field( 'column_hover', 'Hover Column Color', 'column_hover_callback', 'my_plugin_colors', 'my_plugin_colors_section' );
add_settings_field( 'price', 'Price Color', 'price_callback', 'my_plugin_colors', 'my_plugin_colors_section' );
add_settings_field( 'price_font', 'Price Font Color', 'price_font_callback', 'my_plugin_colors', 'my_plugin_colors_section' );
add_settings_field( 'color_two', 'Color Two', 'color_two_callback', 'my_plugin_colors', 'my_plugin_colors_section' );

function my_plugin_colors_validate( $input ) {
    $valid = array();
    $valid['column_background'] = sanitize_text_field( $input['column_background'] );
    $valid['column'] = sanitize_text_field( $input['column'] );
    $valid['column_selected'] = sanitize_text_field( $input['column_selected'] );
    $valid['column_hover'] = sanitize_text_field( $input['column_hover'] );
    $valid['price'] = sanitize_text_field( $input['price'] );
$valid['price_font'] = sanitize_text_field( $input['price_font'] );
$valid['color_two'] = sanitize_text_field( $input['color_two'] );

return $valid;
}

function column_background_callback() {
  $options = get_option( 'my_plugin_colors' );
  echo '<input type="text" name="my_plugin_colors[column_background]" value="' . $options['column_background'] . '" class="color-picker" data-default-color="#ebebeb" />';
}
function column_callback() {
  $options = get_option( 'my_plugin_colors' );
  echo '<input type="text" name="my_plugin_colors[column]" value="' . $options['column'] . '" class="color-picker" data-default-color="#bab6ae" />';
}
function column_selected_callback() {
  $options = get_option( 'my_plugin_colors' );
  echo '<input type="text" name="my_plugin_colors[column_selected]" value="' . $options['column_selected'] . '" class="color-picker" data-default-color="#d3b482" />';
}
function column_hover_callback() {
  $options = get_option( 'my_plugin_colors' );
  echo '<input type="text" name="my_plugin_colors[column_hover]" value="' . $options['column_hover'] . '" class="color-picker" data-default-color="#f3d5a5" />';
}
function price_callback() {
  $options = get_option( 'my_plugin_colors' );
  echo '<input type="text" name="my_plugin_colors[price]" value="' . $options['price'] . '" class="color-picker" data-default-color="#e6c693" />';
}
function price_font_callback() {
  $options = get_option( 'my_plugin_colors' );
  echo '<input type="text" name="my_plugin_colors[price_font]" value="' . $options['price_font'] . '" class="color-picker" data-default-color="#fff" />';
}
function color_two_callback() {
  $options = get_option( 'my_plugin_colors' );
  echo '<input type="text" name="my_plugin_colors[color_two]" value="' . $options['color_two'] . '" class="color-picker" data-default-color="#70707B" />';
}

add_action( 'admin_menu', 'my_plugin_colors_options' );
function my_plugin_colors_options() {
  add_options_page( 'My Plugin Colors', 'My Plugin', 'manage_options', 'my_plugin_colors', 'my_plugin_colors_display' );
}

function my_plugin_colors_display() {
?>
<div class="wrap">
  <h2>My Plugin Colors</h2>
  <form method="post" action="options.php">
    <?php settings_fields( 'my_plugin_colors' ); ?>
    <?php do_settings_sections( 'my_plugin_colors' ); ?>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}