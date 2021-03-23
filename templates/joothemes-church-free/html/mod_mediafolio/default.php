<?php 

/**
 * portfolio Effect! Joomla Module 3.x 2.x
 * 
 */
 
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php
$modURL 	= JURI::base().'modules/mod_mediafolio';



?>

 <?php if ($mediafolioOptionsParams['loadjquery'] == "1" ) : ?>
	   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
 <?php endif ?>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/animate.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/prettyphoto/pretty.css" type="text/css" />

<div class="portfolio <?php echo $mediafolioOptionsParams['moduleclass_sfx'];?>">
	<div id="portfolio-wrapper" class="homepage-portfolio">
		<ul id="portfolio-item-container" data-maxcolumn="<?php echo $mediafolioOptionsParams['columns']; ?>" data-rotateanimation="true" data-animationclass="<?php echo $mediafolioOptionsParams['startanimation']; ?>" />
			<?php if ($mediafolioOptionsParams['enableitem1'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img1']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img1']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title1']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text1']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem2'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img2']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img2']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title2']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text2']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem3'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img3']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img3']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title3']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text3']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem4'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img4']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img4']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title4']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text4']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem5'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img5']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img5']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title5']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text5']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem6'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img6']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img6']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title6']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text6']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem7'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img7']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img7']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title7']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text7']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem8'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img8']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img8']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title8']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text8']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem9'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img9']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img9']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title9']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text9']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem10'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img10']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img10']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title10']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text10']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem11'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img11']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img11']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title11']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text11']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem12'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img12']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img12']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title12']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text12']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem13'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img13']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img13']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title13']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text13']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem14'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img14']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img14']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title14']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text14']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem15'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img15']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img15']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title15']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text15']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem16'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img16']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img16']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title16']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text16']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem17'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img17']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img17']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title17']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text17']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem18'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img18']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img18']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title18']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text18']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem19'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img19']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img19']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title19']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text19']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			<?php if ($mediafolioOptionsParams['enableitem20'] == "1" ) : ?>
				<li class="portfolio-item animate-item design" >
					<div class="portfolio-item-wrapper">
						<img alt="team" src="<?php echo $mediafolioOptionsParams['project_img20']; ?>">
						    <div class="portfolio-overlay">
							    <div class="overlay-wrapper">
									<div class="overlay-cell">
										<a data-rel="prettyPhoto" href="<?php echo $mediafolioOptionsParams['project_img20']; ?>" class="open-btn">
										<i class="fa fa-search fa-border fa-2x"></i>
										</a>
											<h2><?php echo $mediafolioOptionsParams['project_title20']; ?></h2>
											<p class="portfolio-tags"><?php echo $mediafolioOptionsParams['project_text20']; ?></p>
									</div>
								</div>
							</div>
					</div>
				</li>
			<?php endif ?>
			
			
			
		</ul> 
	</div>
</div>

		
<div class="clearfix"></div>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/imagesloaded.min.js"></script>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/prettyphoto/pretty.js"></script>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/jquery.hoverdir.min.js"></script> 
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/portfolio.min.js"></script>  

<style>

.open-btn,.zoom-btn{
background-color:<?php echo $mediafolioOptionsParams['colorbutton']; ?>;
margin-top:<?php echo $mediafolioOptionsParams['marginbutton']; ?>;

}
.open-btn:hover,.zoom-btn:hover{
background-color:<?php echo $mediafolioOptionsParams['colorbuttonhover']; ?>;

}


</style>
				
 <script>
//prettyPhoto 
jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
}); 
</script>

 