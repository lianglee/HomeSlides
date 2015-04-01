<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

function home_slides() {
	ossn_add_hook('halt', "view:pages/contents/index", 'home_slides_add');
}
function home_slides_add(){
	return ossn_view('components/HomeSlides/pages/index');
}
ossn_register_callback('ossn', 'init', 'home_slides');
