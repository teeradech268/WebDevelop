<?php
/**
 # ------------------------------------------------------------------------
 * JWeb Portofolio Display
 # ------------------------------------------------------------------------
 * @package      mod_jweb_portfolio_display
 * @version      1.0
 * @created      October 2015
 * @author       Joomla Web Build
 * @email        admin@joomlawebbuild.com
 * @websites     http://joomlawebbuild.com
 * @copyright    Copyright (C) 2015 Joomla Web Build. All rights reserved.
 * @license      GNU General Public License version 2, or later
 # ------------------------------------------------------------------------
**/

// no direct access
defined('_JEXEC') or die('Restricted access');

$items = modJWEBPortfolioHelper::getImagesFolder($params);

// Process item tags to filter
$filter_tags = array();

foreach($items as $item){
    foreach($item->tags as $tag){
        if(in_array($tag, $filter_tags) == false){
            array_push($filter_tags,$tag);
        }
    }
}

// var_dump($filter_tags);
// var_dump($items);
$content_background = $params->get('content_background');
// Process layout options
$column = $params->get('column');
$tablet = $params->get('tablet');
$mobile = $params->get('mobile');
$filter_position = $params->get('filter_position');
$padding = $params->get('padding');
$padding_value = $params->get('padding_value');
$style = '';
$style .= '.jweb-portfolio-filters ul { text-align:' . $filter_position . ';}';
$style .= '.jweb-item-content { background:' . $content_background . ';}';
$style .= '.jweb-item { width:'. round(100/$column,20) . '%;}';

if($padding == 1 && $padding_value != ""){
    $style .= ' .jweb-item { padding:' .$padding_value . '}';
}
$style.= '@media(max-width: 767px){' . ' .jweb-item {width:' . round(100/$tablet,20) . '%;}}';
$style.= '@media(max-width: 479px){' . ' .jweb-item {width:' . round(100/$mobile,20) . '%;}}';

// Process custom CSS
$document = JFactory::getDocument();
$custom_css = $params->get('custom_css');
$document->addStyleDeclaration($style);
$document->addStyleDeclaration($custom_css);

?>
<style>
.jweb-portfolio-items-margin{
<?php echo 'margin-left:-'. $padding_value  . '; margin-right:-'. $padding_value  . ';';?>
}
</style>

<div id="jweb-portfolio-<?php echo $module->id; ?>">
    <?php if($params->get('filter_category') == "1") : ?>
    <!-- Filter by tags -->
    <div class="jweb-portfolio-filters clearfix">
        <ul data-option-key="filter" id="filter">
            <li class="jweb-filter">
                <a class="selected " title="<?php echo JText::_('JWEB_PORTFOLIO_FILTER_ALL')?>" data-option-value="*" href="#"><?php echo JText::_('JWEB_PORTFOLIO_FILTER_ALL')?></a>
            </li>
            <?php foreach ($filter_tags as $tag): ?>
            <li class="jweb-filter">
                <a title="<?php echo $tag; ?>" data-option-value=".<?php echo $tag; ?>" href="#"><?php echo $tag; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php if(count($items) > 0 ): ?>
    <!-- Porfolio Content -->
    <div id="jweb-portfolio-items-<?php echo $module->id; ?>" class="jweb-portfolio-items-margin">
        <?php foreach($items as $item): ?>
        <div class="jweb-item <?php foreach($item->tags as $tag){ echo " ".$tag; } ; ?>">
            <div class="jweb-item-image">
                <div class="effect-julia">
                    <img src="<?php echo JUri::base().$item->imagesrc; ?>" alt="<?php echo $item->title; ?>" />
                    <div class="jweb-hover-icon">
                        <div class="jweb-icon icon-lightbox"><a href="#jweb-portfolio-<?php echo $item->position; ?>" class="open-popup-link"><i class="fa fa-plus"></i></a></div>
                        <div class="jweb-icon icon-url"><a href="<?php echo $item->url; ?>" target="<?php echo $item->urlTarget; ?>"><i class="fa fa-link"></i></a></div>
                    </div>    
                </div>
            </div>
            <?php if(($params->get('show_title')==1) || ($params->get('show_description')==1) || ($params->get('show_readmore')==1) ) : ?>
            <div class="jweb-item-content">
                <?php if($params->get('show_title')==1) : ?>
                <div class="jweb-content-title"><?php echo $item->title; ?></div>
                <?php endif; ?>
                <?php if($params->get('show_description')==1) : ?>
                <div class="jweb-content-description"><?php echo modJWEBPortfolioHelper::limit_words($item->description,$params->get("description_limit_word")); ?></div>
                <?php endif; ?>
                <?php if($params->get('show_readmore')==1) : ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <!-- Portfolio popup -->
            <div id="jweb-portfolio-<?php echo $item->position; ?>" class="white-popup mfp-hide">
                <div class="content-popup">
                    <div class="jweb-image-popup">
                        <img src="<?php echo JUri::base().$item->imagesrc; ?>" title="<?php echo $item->title; ?>" alt="<?php echo $item->title; ?>" />
                                        <div class="jweb-content-more"><a class="more hvr-sweep-to-right" href="<?php echo $item->url; ?>" target="<?php echo $item->urlTarget; ?>"><?php echo JText::_('JWEB_PORTFOLIO_READMORE')?></a></div>

                    </div>
                   
                </div>
                
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>
<script>
    !function($){
        $(document).ready(function(){
            var $container = $('#jweb-portfolio-items-<?php echo $module->id; ?>');
            // layout Isotope after each image loads
            $container.imagesLoaded().progress( function() {
                $container.isotope({
                    // options
                    itemSelector : '.jweb-item',
                    layoutMode : 'masonry'
                });
                var imgLoad = imagesLoaded( $container );
                imgLoad.on( 'always', function( instance ) {
                    console.log('all images are loaded');
                });
            });
            
            // bind filter button click
            $('.jweb-portfolio-filters').on( 'click', 'a', function() {
                var filterValue = jQuery( this ).attr('data-option-value');
                $container.isotope({ filter: filterValue });
            });
            // filter class
            $("ul#filter>li a:first").addClass('active');
            $('.jweb-portfolio-filters li a').on('click', function (e) {
                e.preventDefault();
                $('.jweb-portfolio-filters li a.active').removeClass('active');
                $(this).addClass('active');
            });
            // magfinic popup
            $('.open-popup-link').magnificPopup({
                gallery: {
                  enabled: true, // set to true to enable gallery

                  preload: [0,2], // read about this option in next Lazy-loading section

                  navigateByImgClick: true,

                  arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button

                  tPrev: 'Previous (Left arrow key)', // title for left button
                  tNext: 'Next (Right arrow key)', // title for right button
                  tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
                },
                image: {
                    // options for image content type
                    titleSrc: 'title'
                },
                type:'inline',
                alignTop:false,
                closeBtnInside:true,
                midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
            });
        });
    }(jQuery);
</script>