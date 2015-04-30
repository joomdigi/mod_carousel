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

//store params as object that we can loop through in tmpl/default.php
$slideritems = new stdClass;


for ($i=1; $i <= 6; $i++) { 
	$slideritems->$i = new stdClass;
	$slideritems->$i->heading = $params->get("slide".$i."_heading");
	$slideritems->$i->text = $params->get("slide".$i."_text");
	$slideritems->$i->background_image = $params->get("slide".$i."_background_image");
	$slideritems->$i->main_image = $params->get("slide".$i."_main_image");
	$slideritems->$i->button_text = $params->get("slide".$i."_button_text");
	$slideritems->$i->button_link = $params->get("slide".$i."_button_link");
	$slideritems->$i->show_read_more = $params->get("slide".$i."_show_read_more");
}

//more options
$custom_style = $params->get('custom_style');
$slide1_caption_class = $params->get('slide1_caption_class');
$slide2_caption_class = $params->get('slide2_caption_class');
$slide3_caption_class = $params->get('slide3_caption_class');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_carousel', $params->get('layout', 'default'));
?>
