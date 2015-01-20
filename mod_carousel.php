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
//store params into arrays that we can loop through in tmpl/default.php
for ($i=1; $i <= 3; $i++) { 
	$slide_heading[$i] = $params->get("slide".$i."_heading");
	$slide_text[$i] = $params->get("slide".$i."_text");
	$slide_background_image[$i] = $params->get("slide".$i."_background_image");
	$slide_main_image[$i] = $params->get("slide".$i."_main_image");
	$slide_button_text[$i] = $params->get("slide".$i."_button_text");
	$slide_button_link[$i] = $params->get("slide".$i."_button_link");
	$slide_show_read_more[$i] = $params->get("slide".$i."_show_read_more");
}


// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_carousel', $params->get('layout', 'default'));
?>
