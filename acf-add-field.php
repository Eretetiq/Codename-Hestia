/* add to blackwood 
add_action('init', 'my_custom_plugin_init_script');

function my_custom_plugin_init_script() {
    if (function_exists('acf_add_local_fields')) {
        // code from your script here
    }
}.*/


<?php
if( function_exists('acf_add_local_fields') ) {
    $custom_fields = array(
        array(
            'key' => 'custom_field_key_1',
            'label' => 'Custom Field 1',
            'name' => 'custom_field_1',
            'type' => 'text',
            'parent' => 'group_5ab3ab3ab314a',
        ),
        array(
            'key' => 'custom_field_key_2',
            'label' => 'Custom Field 2',
            'name' => 'custom_field_2',
            'type' => 'textarea',
            'parent' => 'group_5ab3ab3ab314a',
        ),
        array(
            'key' => 'custom_field_key_3',
            'label' => 'Custom Field 3',
            'name' => 'custom_field_3',
            'type' => 'select',
            'parent' => 'group_5ab3ab3ab314a',
            'choices' => array(
                'Option 1' => 'option_1',
                'Option 2' => 'option_2',
                'Option 3' => 'option_3',
            ),
        ),
    );
    $existing_fields = acf_get_fields();
    $existing_keys = array();
    foreach ($existing_fields as $field) {
        $existing_keys[] = $field['key'];
    }
    $fields_to_add = array();
    foreach ($custom_fields as $field) {
        if (!in_array($field['key'], $existing_keys)) {
            $fields_to_add[] = $field;
        }
    }
    if (!empty($fields_to_add)) {
        acf_add_local_fields($fields_to_add);
    }
}