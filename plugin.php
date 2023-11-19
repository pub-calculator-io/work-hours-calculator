<?php
/*
Plugin Name: Work Hours Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/work-hours-calculator/
Description: Work hours calculator helps employees accurately calculate the number of hours worked each week with settings to account for breaks, hourly rounding, and military time.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_work_hours_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Work Hours Calculator by Calculator.iO";

function display_ci_work_hours_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Work Hours Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_work_hours_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_work_hours_calculator', 'display_ci_work_hours_calculator' );