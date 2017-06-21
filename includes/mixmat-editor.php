<?php
/**
 * The plugin form rendering file
 *
 * @since             1.0.0
 * @package           Mixmat
 * @subpackage        Mixmat/includes
 *
*/
add_action( 'admin_footer', 'mixmat_render_mce_popup' );
add_action( 'media_buttons', 'mixmat_render_media_buttons' );

//move wpautop filter to AFTER shortcode is processed
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );


/**
 * HTML mark-up for an enclosing shortcode
 * make sure they are all loaded before calling into js
 * @wp do_shortcode()
 * @array .mxmt-xs-3, .mxmt-xs-4, .mxmt-xs-6, .mxmt-xs-8, .mxmt-xs-9, .mxmt-xs-12
 * @facevalue  1/4    1/3    1/2    2/3    3/4    one
 *
 * Custom shortcode callback function
 *
 * @param array  $atts
 * @param string $content
 * @return string
 */
function mixmat_shortcode_callback_one( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_one">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init', 'mixmat_shortcode_callback_one' );
add_shortcode( 'one',  'mixmat_shortcode_callback_one' );


// 1/2
function mixmat_shortcode_callback_one_half( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_one_half">' . shortcode_unautop ( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_one_half' );
add_shortcode( 'one_half',  'mixmat_shortcode_callback_one_half' );


//1/4
function mixmat_shortcode_callback_one_fourth( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_one_fourth">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_one_fourth' );
add_shortcode( 'one_fourth',  'mixmat_shortcode_callback_one_fourth' );


//1/3
function mixmat_shortcode_callback_one_third( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_one_third">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_one_third' );
add_shortcode( 'one_third',  'mixmat_shortcode_callback_one_third' );


//2/3
function mixmat_shortcode_callback_two_thirds( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_two_thirds">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_one_third' );
add_shortcode( 'two_thirds',  'mixmat_shortcode_callback_two_thirds' );


//3/4
function mixmat_shortcode_callback_three_fourths( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_three_fourths">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_three_fourths' );
add_shortcode( 'three_fourths',  'mixmat_shortcode_callback_three_fourths' );


//last one half
function mixmat_shortcode_callback_last_one_half( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_last_one_half">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_last_one_half' );
add_shortcode( 'last_one_half',  'mixmat_shortcode_callback_last_one_half' );


//last_one_fourth
function mixmat_shortcode_callback_last_one_fourth( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_last_one_fourth">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_last_one_fourth' );
add_shortcode( 'last_one_fourth',  'mixmat_shortcode_callback_last_one_fourth' );


// last 1/3
function mixmat_shortcode_callback_last_one_third( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_last_one_third">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_last_one_third' );
add_shortcode( 'last_one_third',  'mixmat_shortcode_callback_last_one_third' );


//2/3
function mixmat_shortcode_callback_last_two_thirds( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_last_two_thirds">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_last_two_thirds' );
add_shortcode( 'last_two_thirds',  'mixmat_shortcode_callback_last_two_thirds' );


//3/4
function mixmat_shortcode_callback_last_three_fourths( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_last_three_fourths">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_last_three_fourths' );
add_shortcode( 'last_three_fourths',  'mixmat_shortcode_callback_last_three_fourths' );

//0/0
function mixmat_shortcode_callback_empty_row( $atts = null, $content = null ) {
    $defaults = array();
    $settings = shortcode_atts( $defaults, wp_parse_args( $atts ) );

    $output = '<div class="mxmt_empty_row">' . shortcode_unautop( $content ) . '</div>';
    return $output;
}
add_action( 'init',  'mixmat_shortcode_callback_empty_row' );
add_shortcode( 'empty_row',  'mixmat_shortcode_callback_empty_row' );


/**
 * Utility to add MCE Popup fired by custom Media Buttons button
 *
 * @hook admin_footer
 */
function mixmat_render_mce_popup() {
?>
    <div id="mxmt_refer_shortcode" style="display:none;">

            <div>
                <div style="padding:15px 15px 0 15px;">
                    <h5>Mixmat PageMixer Shortcode Reference</h5>

            <table class="widefat" id="mxmtList">
            <tr><td> [one][/one] </td></tr>
            <tr><td> [one_half][/one_half] </td></tr>
            <tr><td> [one_third][/one_third] </td></tr>
            <tr><td> [one_fourth][/one_fourth] </td></tr>
            <tr><td> [three_fourths][/three_fourths] </td></tr>
            <tr><td> [two thirds][/two thirds] </td></tr>
            <tr class="mxmt-bgj"><td> [empty_row][/empty_row] </td></tr>
            <tr class="mxmt-bgb"><td> [last_one_half][/last_one_half] </td></tr>
            <tr class="mxmt-bgb"><td> [last_one_third][/last_one_third] </td></tr>
            <tr class="mxmt-bgb"><td> [last_one_fourth][/last_one_fourth] </td></tr>
            <tr class="mxmt-bgb"><td> [last_three_fourths][/last_three_fourths] </td></tr>
            <tr class="mxmt-bgb"><td> [last_two_thirds][/last_two_thirds] </td></tr>
            <tr class="mxmt-bgb"><td>
<span class="mxmt-bgj"><?php _e( 'Last block in a row uses the <em><b>last_</b></em> selector.', 'mixmat' ); ?></span>
</td></tr>
<tr><td><small><?php esc_html_e( 'Your content should be added between the shortcoe tags.
Copy then Paste into Your Editor exactly where you want it placed. [one]My cool content here.[/one]', 'mixmat' ); ?></small></td>
            </tr>
            </table>
                <div style="padding:15px;"><!--
                    <input type="button" class="button-primary" value="Insert Shortcode"
                    onclick="InsertContainer()" name="submit" />&nbsp;&nbsp;&nbsp; -->
                    <a class="button" href="#" onclick="tb_remove();
                            return false;">Close</a>
                </div>
                <div class="mxmt-footer">
                    <h5><?php esc_html_e( 'Examples', 'mixmat' ); ?></h5>
<p style="line-height: 1; margin: 6px 0;">1/2 + last_1/2 = 1 ----- one = 1</p>
<p style="line-height: 1; margin: 6px 0;">1/3 + last_2/3 = 1 ----- 1/3 + 1/3 + last_1/3 = 1</p>
<p style="line-height: 1; margin: 6px 0;">1/4 + last_3/4 = 1 ----- 1/4 + 1/4 + 1/4 + last_1/4 = 1</p>
<p style="line-height: 1; margin: 6px 0;">3/4 + last_1/4 = 1 ----- 1/2 + 1/4 + last_1/4 = 1</p>
<p><?php esc_html_e( 'Empty row [empty_row][/empty_row] is a spacer with border on top.', 'mixmat' ); ?></p>
<p><?php esc_html_e( 'As an alternative to copy/paste, you may type in shortcode', 'mixmat' ); ?></p>
</div>

            </div>

    </div>
    <?php

    }

/**
 * Utility to add MCE Popup button to the Media Buttons section which lies directly
 * above the Visual / Text Editor
 *
 * @hook media_buttons
 */
function mixmat_render_media_buttons() {

    ?>
    <a href = "#TB_inline?width=680&height=820&inlineId=mxmt_refer_shortcode"
    class = "button thickbox mxmt_doin_media_link" id = "add_div_shortcode"
    title = "choose shortcode">PageMixer</a>
    <?php
}


if ( !function_exists('mixmat_fix_shortcodes') ) {
    function mixmat_fix_shortcodes($content){
        $array = array (
            '<p>[' => '[',
            ']</p>' => ']',
            ']<br />' => ']'
        );
        $content = strtr($content, $array);
        return $content;
    }
    add_filter('the_content', 'mixmat_fix_shortcodes');
}
