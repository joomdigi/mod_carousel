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

$carousel_id = $params->get('carousel_id', 'myCarousel');


for ($i=1; $i <= 6; $i++) $slideritems->$i = new stdClass;

for ($i=1; $i <= 6; $i++) { 

	$slideritems->$i->heading = $params->get("slide".$i."_heading");
	$slideritems->$i->text = $params->get("slide".$i."_text");
	$slideritems->$i->background_image = $params->get("slide".$i."_background_image");
	$slideritems->$i->main_image = $params->get("slide".$i."_main_image");
	$slideritems->$i->button_text = $params->get("slide".$i."_button_text");
	$slideritems->$i->button_link = $params->get("slide".$i."_button_link");
	$slideritems->$i->show_read_more = $params->get("slide".$i."_show_read_more");
	$slideritems->$i->caption_class = $params->get("slide".$i."_caption_class");
}

//more options
$custom_style = $params->get('custom_style');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_carousel', $params->get('layout', 'default'));
?>
