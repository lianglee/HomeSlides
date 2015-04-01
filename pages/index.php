<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/coin-slider/1.0.0/coin-slider.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/coin-slider/1.0.0/coin-slider-styles.css" type="text/css" />
<script>
$(document).ready(function() {
	$('#slides').coinslider({ hoverPause: false });
});
</script>
<div class="home-left-contents">
    <h1><?php echo ossn_print('home:top:heading', array(ossn_site_settings('site_name'))); ?> </h1>
    <div id="slides">
    	<img src="<?php echo ossn_site_url(); ?>components/HomeSlides/images/01.jpg"/>
    	<img src="<?php echo ossn_site_url(); ?>components/HomeSlides/images/03.jpg"/>
    </div>
</div>
<div class="home-right-contents">
    <h1> <?php echo ossn_print('create:account'); ?> </h1>

    <div class="h1-bottom"> <?php echo ossn_print('its:free'); ?> </div>
    <br/>
    <?php echo ossn_view_form('signup', array(
        'id' => 'ossn-home-signup',
        'action' => ossn_site_url('action/user/register')
    )); ?>
</div>
      
