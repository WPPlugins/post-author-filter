<?php
/*
Plugin Name: Post Author Filter
Plugin URI: http://www.staude.net/wordpress/plugins/PostAuthorFilter
Description: Add a author selection on post / page editpage
Version: 0.2
Author: Frank Staude
Text Domain: post_author_filter
Domain Path: languages
Author URI: http://www.staude.net/
Compatibility: WordPress 4.0
License: GPL
*/

/**
 * Revision: $Rev: 988985 $
 * Last Change: $Date: 2014-09-13 12:49:18 +0200 (Sat, 13 Sep 2014) $
 * from: $Author: f.staude $
 * 
 * ID:  $Id: post-author-filter.php 988985 2014-09-13 10:49:18Z f.staude $
 */
if (!class_exists( 'post_author_filter' ) ) {

    include_once dirname( __FILE__ ) .'/class-post-author-filter.php';

    $post_author_filter = new post_author_filter();

}