<?php
/**
 * @package 	mod_bt_contentslider - BT ContentSlider Module
 * @version		1.4
 * @created		Oct 2011

 * @author		BowThemes
 * @email		support@bowthems.com
 * @website		http://bowthemes.com
 * @support		Forum - http://bowthemes.com/forum/
 * @copyright	Copyright (C) 2012 Bowthemes. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
if($modal){JHTML::_('behavior.modal');}
$document = JFactory::getDocument();
if(count($list)>0){?>
<div id="btcontentslider<?php echo $module->id; ?>" style="display:none;width:<?php echo $moduleWidthWrapper;?>" class="bt-cs<?php echo $moduleclass_sfx? ' bt-cs'.$params->get('moduleclass_sfx'):'';?>">
	<?php if( $next_back && $totalPages  > 1  ) : ?>
	<a class="prev" href="#"></a><a class="next" href="#"></a>
	<?php endif; ?>
	<?php
		$add_style = "";
		if( trim($params->get('content_title')) ){
		$add_style= "border: 1px solid #CFCFCF;padding:10px 0px;";
	?>
	<h3 style="width:<?php echo $moduleWidth;?>">
		<?php if($params->get('content_link')) {?>
			<a href="<?php echo $params->get('content_link');?>"><span><?php echo $params->get('content_title') ?> </span></a>
		<?php } else { ?>
			<span><?php echo $params->get('content_title') ?> </span>
		<?php   }?>
	</h3>
	<?php } ?>
	<div class="slides_container" style="width:<?php echo $moduleWidth.";".$add_style;?>">

	<?php foreach( $pages as $key => $list ): ?>
		<div class="slide" style="width:<?php echo $moduleWidth;?>">
		<?php foreach( $list as $i => $row ): ?>
			<div class="bt-row <?php if($i==0) echo 'bt-row-first';  else if($i==count($list)-1) echo 'bt-row-last' ?>"  style="width:<?php echo $itemWidth;?>%" >
				<div class="bt-inner">




				<?php if( $row->thumbnail && $align_image != "center"): ?>
					<a target="<?php echo $openTarget; ?>" class="bt-image-link<?php echo $modal? ' modal':''?>" title="<?php echo $row->title;?>" href="<?php echo $modal?$row->mainImage:$row->link;?>">
					  <img <?php echo $imgClass ?>  src="<?php echo $row->thumbnail; ?>" alt="<?php echo $row->title?>"  style="width:<?php echo $thumbWidth ;?>px; float:<?php echo $align_image;?>;margin-<?php echo $align_image=="left"? "right":"left";?>:5px" title="<?php echo $row->title?>" />
					</a>
				<?php endif ; ?>



					<?php if( $row->thumbnail && $align_image == "center" ): ?>
					<div class="bt-center">
					<a target="<?php echo $openTarget; ?>"
						class="bt-image-link<?php echo $modal? ' modal':''?>"
						title="<?php echo $row->title;?>" href="<?php echo $modal?$row->mainImage:$row->link;?>">
						<img <?php echo $imgClass ?> src="<?php echo $row->thumbnail; ?>" alt="<?php echo $row->title?>"  style="width:<?php echo $thumbWidth ;?>px;" title="<?php echo $row->title?>" />
					</a>
					</div>
					<?php endif ; ?>
					<?php if( $showDate ): ?>

							<span class="bt-date">
					<?php echo date('d.m.Y', strtotime($row->created));?>
					</span>
					<?php endif; ?>
					<?php if( $show_category_name ): ?>
					<?php if($show_category_name_as_link) : ?>
						<a class="bt-category" target="<?php echo $openTarget; ?>"
							title="<?php echo $row->category_title;?>"
							href="<?php echo $row->categoryLink;?>"><?php echo $row->category_title;?></a>
						<?php else :?>
						<span class="bt-category"> <?php echo $row->category_title;?></span>
						<?php endif; ?>
						<?php endif; ?>


											<?php if( $showAuthor ): ?>
							<span class="bt-author"><?php echo $row->author;?></span>
							<?php endif; ?>


					<?php if( $showTitle ): ?>
					<a class="bt-title" target="<?php echo $openTarget; ?>"
						title="<?php echo $row->title; ?>"
						href="<?php echo $row->link;?>"> <?php echo $row->title_cut; ?> </a><br />
					<?php endif; ?>

					<?php if( $show_intro ): ?>
					<div class="bt-introtext">
					<?php echo $row->description; ?>
					</div>
					<?php endif; ?>

					<?php if( $showReadmore ) : ?>

						<a class="more_bt" target="<?php echo $openTarget; ?>"
							title="<?php echo $row->title;?>"
							href="<?php echo $row->link;?>"> <?php echo JText::_('READ_MORE');?>
						</a>

					<?php endif; ?>

				</div>
				<!--end bt-inner -->
			</div>
			<!--end bt-row -->
			<?php
			if($itemsPerCol > 1 && $i < count($list)-1){
				if(($i+1)%$itemsPerRow ==0){
					echo '<div class="bt-row-separate"></div>';
				}
			}
			?>
			<?php endforeach; ?>
			<div style="clear: both;"></div>

		</div>
		<!--end bt-main-item page	-->
		<?php endforeach; ?>
	</div>
</div>
<!--end bt-container -->
<div style="clear: both;"></div>

<script type="text/javascript">
	if(typeof(btcModuleIds)=='undefined'){var btcModuleIds = new Array();var btcModuleOpts = new Array();}
	btcModuleIds.push(<?php echo $module->id; ?>);
	btcModuleOpts.push({
			slideEasing : '<?php echo $slideEasing; ?>',
			fadeEasing : '<?php echo $slideEasing; ?>',
			effect: '<?php echo $effect; ?>',
			preloadImage: '<?php echo $preloadImg; ?>',
			generatePagination: <?php echo $paging ?>,
			play: <?php echo $play; ?>,
			hoverPause: <?php echo $hoverPause; ?>,
			slideSpeed : <?php echo $duration; ?>,
			autoHeight:<?php echo $autoHeight ?>,
			fadeSpeed : <?php echo $fadeSpeed ?>,
			equalHeight:<?php echo $equalHeight; ?>,
			width: <?php echo $moduleWidth=='auto'? "'auto'":$params->get( 'module_width', 0 ); ?>,
			height: <?php echo $moduleHeight=='auto'? "'auto'":$params->get( 'module_height', 0 ); ?>,
			pause: 100,
			preload: true,
			paginationClass: '<?php echo $butlet==1 ? 'bt_handles': 'bt_handles_num' ?>',
			generateNextPrev:false,
			prependPagination:true,
			touchScreen:<?php echo $touchScreen ?>
	});
</script>
<?php
	// set position for bullet
	if($butlet) {
		$nav_top = (-1)*(int)$params->get( 'navigation_top', 0 );
		$nav_right = (-1)*(int)$params->get( 'navigation_right', 0 )+5;
		if(trim($params->get('content_title'))) $nav_top += 13;


	}
	// set responsive for mobile device
	if($moduleWidth=='auto'){
	$document->addStyleDeclaration(
		'
		@media screen and (max-width: 1024px){.bt-cs .bt-row{width:50%!important;}}
		@media screen and (max-width: 480px){.bt-cs .bt-row{width:100%!important;}}'
	);
	}
}
else
{
	echo '<div>No result...</div>';
} ?>
