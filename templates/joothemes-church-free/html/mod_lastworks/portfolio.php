<?php
/**
 * @autor       Valentín García
 * @website     www.htmgarcia.com
 * @package		Joomla.Site
 * @subpackage	mod_lastworks
 * @copyright	Copyright (C) 2014 Valentín García. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Load CSS
JHtml::_('stylesheet', 'modules/mod_lastworks/assets/css/isotope.css');

// Load jQuery if enabled


// Load Isotope
JHtml::_('script', 'modules/mod_lastworks/assets/js/isotope.pkgd.min.js');
JHtml::_('script', 'modules/mod_lastworks/assets/js/isotope.js');

echo '<div class="lastworks_isotope ' . $moduleclass_sfx . '">';
    if(count($articles)) { //<-- A1.
        
        echo '<div id="filters" class="button-group">
            <button class="button is-checked" data-filter="*">' . JText::_('MOD_LASTWORKS_ALL') . '</button>';
            foreach($categories as $categorie) {
                echo '<button class="button" data-filter=".category-' . $categorie->id . '">' . $categorie->title . '</button>';
            }
        echo '</div>';

        echo '<div class="lastworks_isotope_items">';
            foreach($articles as $article) {
                $images = json_decode($article->images);
                if( $images->image_intro ){
                    //intro image from article
                    $vg_img_ = JURI::base() . $images->image_intro;
                }else{
                    //default one as alert message
                    $vg_img_ = 'http://placehold.it/204x120';
                }
                echo '<div class="element-item category-' . $article->catid . '" data-category="category-' . $article->catid . '">
                    <h3 class="name"><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . $article->title . '</a></h3>
                    <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '"><img class="grow" src="' . $vg_img_ . '" alt="" /></a>
                </div>';
            }
        echo '</div>';
        
    }else{// .A1

        echo '<div class="lastworks-alert">' . JText::_('MOD_LASTWORKS_NO_ARTICLES_FOUND') . '</div>';
    
    }// .A1 -->
echo '</div>';

?>