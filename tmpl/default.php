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
?>
<style>

</style>
 
 <div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner container">
    <?php for ($i = 1; $i <= 3; $i++) { 
      $active = ($i === 1)? " active" : ""; ?>
      <div class="item<?php echo $active; ?>">
        <div class="carousel-caption">
            <h1 class="carousel-title"><?php echo $slide_heading[$i]; ?></h1>
            <?php if($slide_text[$i] != "no") : ?>
            <p class="carousel-body"><?php echo $slide_text[$i]; ?></p>
            <?php endif; ?>
            <?php if($slide_show_read_more[$i]) : ?>
             <p><a class="btn btn-lg btn-primary" href="<?php echo $slide_button_link[$i]; ?>" role="button"><?php echo $slide_button_text[$i]; ?></a></p>
            <?php endif; ?>
        </div>
        <?php if($slide_main_image[$i]) : ?>
          <div class="carousel-image">
            <img class="server" src="<?php echo JURI::base(); ?><?php echo $slide_main_image[$i]; ?>" alt="<?php echo $slide_heading[$i]; ?>" />
          </div>
        <?php endif; ?>
      </div>
    <?php } ?>
  </div>

  <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
</div>
