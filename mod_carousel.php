<?php
/**
 * @version     1.1
 * @package     mod_carousel
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@joomdigi.com> - http://www.joomdigi.com
 */
//No Direct Access
defined('_JEXEC') or die;

/* Params */
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$slideInterval = $params->get('interval_slide');

$slide1_heading = $params->get('slide1_heading');
$slide1_text = $params->get('slide1_text');
$slide1_background_image = $params->get('slide1_background_image');
$slide1_main_image = $params->get('slide1_main_image');
$slide1_button_text = $params->get('slide1_button_text');
$slide1_button_link = $params->get('slide1_button_link');
$slide1_show_read_more = $params->get('slide1_show_read_more');

$slide2_heading = $params->get('slide2_heading');
$slide2_text = $params->get('slide2_text');
$slide2_background_image = $params->get('slide2_background_image');
$slide2_main_image = $params->get('slide2_main_image');
$slide2_button_text = $params->get('slide2_button_text');
$slide2_button_link = $params->get('slide2_button_link');
$slide2_show_read_more = $params->get('slide2_show_read_more');

$slide3_heading = $params->get('slide3_heading');
$slide3_text = $params->get('slide3_text');
$slide3_background_image = $params->get('slide3_background_image');
$slide3_main_image = $params->get('slide3_main_image');
$slide3_button_text = $params->get('slide3_button_text');
$slide3_button_link = $params->get('slide3_button_link');
$slide3_show_read_more = $params->get('slide3_show_read_more');

//more options
$custom_style = $params->get('custom_style');
$slide1_caption_class = $params->get('slide1_caption_class');
$slide2_caption_class = $params->get('slide2_caption_class');
$slide3_caption_class = $params->get('slide3_caption_class');
$pauseSlide = $params->get('pause_slide');
$wrapSlide = $params->get('wrap_slide');
$keyboardSlide = $params->get('keyboard_slide');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_carousel', $params->get('layout', 'default'));
?>