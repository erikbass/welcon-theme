<?php
/* ------------------------------------------------------------------------*
 * Messages Shortcode
 * ------------------------------------------------------------------------*/
 
 // Information
function show_info($atts, $content = null) {
	return '<p class="info">'.do_shortcode($content).'<i class="icon-remove"></i></p>';
}
add_shortcode('info', 'show_info');

// Tip
function show_tip($atts, $content = null) {
	return '<p class="tip">'.do_shortcode($content).'<i class="icon-remove"></i></p>';
}
add_shortcode('tip', 'show_tip');
 
 // Error
function show_error($atts, $content = null) {
	return '<p class="error">'.do_shortcode($content).'<i class="icon-remove"></i></p>';
}
add_shortcode('error', 'show_error');

 // Success
function show_success($atts, $content = null) {
	return '<p class="success">'.do_shortcode($content).'<i class="icon-remove"></i></p>';
}
add_shortcode('success', 'show_success');



/* ------------------------------------------------------------------------*
 * Lists
 * ------------------------------------------------------------------------*/
// Disc list
function disc_list($atts, $content = null) {
    return '<div class="disc-list">'.do_shortcode($content).'</div>';
}
add_shortcode('disc_list', 'disc_list');

// small arrow list
function small_arrow_list($atts, $content = null) {
    return '<div class="small-arrow-list">'.do_shortcode($content).'</div>';
}
add_shortcode('small_arrow_list', 'small_arrow_list');

// Tick list
function tick_list($atts, $content = null) {
    return '<div class="tick-list">'.do_shortcode($content).'</div>';
}
add_shortcode('tick_list', 'tick_list');

// Arrow list
function arrow_list($atts, $content = null) {
    return '<div class="arrow-list">'.do_shortcode($content).'</div>';
}
add_shortcode('arrow_list', 'arrow_list');


/* ------------------------------------------------------------------------*
 * Buttons
 * ------------------------------------------------------------------------*/

// Button Real Mini
function button_real_mini($atts, $content = null) {
    extract(shortcode_atts(array(
                                'link' => '#',
                                'target' => ''
                                ), $atts));

    return '<a class="real-btn btn-mini" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';
}
add_shortcode('button_mini', 'button_real_mini');


// Button Real Small
function button_real_small($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="real-btn btn-small" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';
}
add_shortcode('button_small', 'button_real_small');


// Button Real Large
function button_real_large($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="real-btn btn-large" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';
}
add_shortcode('button_large', 'button_real_large');



// Button blue Mini
function button_blue_mini($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="btn-blue btn-mini" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';

}
add_shortcode('button_blue_mini', 'button_blue_mini');


// Button blue Small
function button_blue_small($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="btn-blue btn-small" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';
}
add_shortcode('button_blue_small', 'button_blue_small');


// Button blue Large
function button_blue_large($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="btn-blue btn-large" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';

}
add_shortcode('button_blue_large', 'button_blue_large');



// Button grey Mini
function button_grey_mini($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="btn-grey btn-mini" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';

}
add_shortcode('button_grey_mini', 'button_grey_mini');


// Button grey Small
function button_grey_small($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="btn-grey btn-small" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';
}
add_shortcode('button_grey_small', 'button_grey_small');


// Button grey Large
function button_grey_large($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'target' => ''
    ), $atts));

    return '<a class="btn-grey btn-large" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';
}
add_shortcode('button_grey_large', 'button_grey_large');


?>