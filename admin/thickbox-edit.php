<?php
defined( 'ABSPATH' ) OR exit;

$name  = $_GET['serialized_name'];
$value = get_option( $name );

$settings = array(
	'codeEditor' => wp_enqueue_code_editor( array( 'type' => 'json' ) ),
);
wp_enqueue_script( 'wp-theme-plugin-editor' );
wp_add_inline_script( 'wp-theme-plugin-editor', sprintf( 'jQuery( function( $ ) { wp.themePluginEditor.init( $( "#wpoe-serialized-edit" ), %s ); } )', wp_json_encode( $settings ) ) );
wp_add_inline_script( 'wp-theme-plugin-editor', sprintf( 'wp.themePluginEditor.themeOrPlugin = "plugin";' ) );

?>
<div id="wpoe-serialized-edit">
    <fieldset>
        <legend>Option: <?php echo $name; ?></legend>
        <ul>
            <li><p>Value Type: Serialized Array</p></li>
            <li>
                <p>Edit Format:
                <label><input type="radio" name="type" value="serialized" <?php selected(); ?>>Serialized</label>
                <label><input type="radio" name="type" value="json">JSON</label>
                <label><input type="radio" name="type" value="array">Array</label>
                </p>
            </li>
        </ul>
    </fieldset>
    <div>
        <label for="serialized_json" id="serialized_json-label"><?php _e( 'Option Value:', '' ); ?></label>
        <textarea id="serialized_json"><?php echo json_encode( $value, JSON_PRETTY_PRINT ); ?></textarea>
    </div>
    <input type="button" id="save_json" class="button button-primary" value="Save Changes">
    <span class="button-note"></span>
</div>
