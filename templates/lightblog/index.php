<?php 

/*******************************************************************************************

Light Blog Free Joomla! 3 Responsive Template - June 2015
Package tpl-lightblog-free-j3.zip
Version 1.0

@copyright	Copyright (C) 2015 JooThemes.net 

http://joothemes.net

*******************************************************************************************/

defined( '_JEXEC' ) or die( 'Restricted access' );
$jquery			= $this->params->get('jquery');
$scrolltop		= $this->params->get('scrolltop');
$superfish		= $this->params->get('superfish');
$logo			= $this->params->get('logo');
$logotype		= $this->params->get('logotype');
$sitetitle		= $this->params->get('sitetitle');
$sitedesc		= $this->params->get('sitedesc');
$menuid			= $this->params->get('menuid');
$animation		= $this->params->get('animation');
$backgroundVariation = $this->params->get('backgroundVariation');
$analyticsCode	= $this->params->get('analyticsCode');
$googleFont		= $this->params->get('googleFont');
$googleFontBody	= $this->params->get('googleFontBody');
$googleFontWeight = $this->params->get('googleFontWeight');
$googleFontCharacter = $this->params->get('googleFontCharacter');
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;
$menu = $app->getMenu();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<?php include "functions.php"; ?>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFont');?>|<?php echo $this->params->get('googleFontBody');?>:<?php echo $this->params->get('googleFontWeight');?>&subset=<?php echo $this->params->get('googleFontCharacter');?>' rel='stylesheet' type='text/css' />
<?php require("admin/params.php"); ?>
<?php if ($jquery == 'yes' ) : ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.noconflict.js"></script>
<?php endif; ?>

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#user1 .module, #user2 .module').matchHeight();
});
</script>


<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bootstrap/css/bootstrap.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bootstrap/js/bootstrap.min.js"></script>
<?php if ($scrolltop == 'yes' ) : ?><script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scrolltopcontrol.js"></script><?php endif; ?>


<?php if ($superfish == 'yes' ) : ?>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/hoverIntent.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>

    <script type="text/javascript">
		jQuery(window).bind('resize load',function(){
		if( jQuery(this).width() > 799 ){
			jQuery('#nav ul.menu').addClass('sf-js-enabled');
						jQuery('#nav ul.menu').superfish({
							pathLevels	: 4,
							delay		: 300,
							animation	: {opacity:'show',height:'show',width:'hide'},
							speed		: 'fast',
						});	
		} else {
			jQuery('#nav ul.menu').removeClass('sf-js-enabled');
		}});	
</script>
<?php endif; ?>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#nav-w').prepend('<a id="menu-icon">Menu</a>');
		$("#menu-icon").on("click", function(){
			$("#nav").slideToggle(500,"linear");
			$(this).toggleClass("active");
			
		});
	});
</script>

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.tinyTips.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/tools.js"></script>

</head>
<body class="background <?php echo $this->params->get('backgroundVariation'); ?>">
<div id="scroll-top"></div>
<?php if ($this->countModules('menu')) : ?>
	<div id="nav-w">
        <div id="nav">
		    <jdoc:include type="modules" name="menu" style="none" />              
        </div>
    </div> 			
<?php endif; ?>
<div id="header-w">
    <div id="header" class="row-fluid">
    <?php if ($logotype == 'image' ) : ?>
    <?php if ($logo != null ) : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>"><img class="lightbloglogo" src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" /></a></div>
    <?php else : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>/"><img class="lightbloglogo" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>"></a></div>
    <?php endif; ?><?php endif; ?> 
    <?php if ($logotype == 'text' ) : ?>
    <div class="logo text"><a href="<?php echo $this->baseurl ?>"><span><?php echo htmlspecialchars($sitetitle);?></span>
	<?php if ($sitedesc !== '' ) : ?>
    <span class="sitedescription"><?php echo htmlspecialchars($sitedesc);?></span>
    <?php endif; ?>	
	</a></div>
    <?php endif; ?>
	
	<?php if ($this->countModules('bannertop')) : ?>
        <div class="bannertop">
        <jdoc:include type="modules" name="bannertop" style="none"/> 
        </div>
    <?php endif; ?>
                  
	</div>       
</div>

			<?php if (is_array($menuid) && !is_null($menu->getActive()) && in_array($menu->getActive()->id, $menuid, false)) { ?>
            <div id="slide-wrap">
                    <?php include "slideshow.php"; ?>
            </div>
            <?php } ?>

<?php if ($menu->getActive() !== $menu->getDefault()) { ?>
<div id="breadcrumb-w">
  <jdoc:include type="modules" name="breadcrumbs" style="none" />
</div>
<?php } ?>

<div id="main"> 
	<div id="wrapper-w"><div id="wrapper">
        <div id="comp-w"> 
		
				    <?php if ($this->countModules('user2')) : ?>
                    <div id="user2w"><div id="user2" class="row-fluid">
                        <jdoc:include type="modules" name="user2" style="ajgrid" grid="<?php echo $user2_width; ?>" />
                        <div class="clr"></div> 
                    </div></div>
                    <?php endif; ?>
					
				    <?php if ($this->countModules('user3')) : ?>
                    <div id="user3w"><div id="user3" class="row-fluid">
                        <jdoc:include type="modules" name="user3" style="ajgrid" grid="<?php echo $user3_width; ?>" />
                        <div class="clr"></div> 
                    </div></div>
                    <?php endif; ?>
					
        <div class="row-fluid">
                    <?php if ($this->countModules('left')) : ?>
                    <div id="leftbar-w" class="span3 pull-left">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="left" style="ajgrid" />                     
                    </div>
                    </div>
                    <?php endif; ?>                          
                        <div id="comp" class="span<?php echo $compwidth ?>">
                            <div id="comp-i">
                            	<jdoc:include type="message" />
                                <jdoc:include type="component" />
                                <div class="clr"></div>                             
                            </div>
                        </div>
                    <?php if ($this->countModules('right')) : ?>
                    <div id="rightbar-w" class="span3 pull-right">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="right" style="ajgrid" />
                    </div>
                    </div>
                    <?php endif; ?>
                    </div>
		<div class="clr"></div>

					<?php if ($this->countModules('user4')) : ?>
                    <div id="user4w">
                    <div id="user4" class="row-fluid">
                        <jdoc:include type="modules" name="user4" style="ajgrid" grid="<?php echo $user4_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    </div>
                    <?php endif; ?>   
        </div>
        <div class="clr"></div>                       
  </div></div>  
</div>
                <?php if ($this->countModules('usermap')) : ?>
                <div id="usermap_wrapper">
                    <div id="usermap" class="row-fluid">
                        <jdoc:include type="modules" name="usermap" style="ajgrid" grid="<?php echo $usermap_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                </div>
                    <?php endif; ?>   

			    <?php if ($this->countModules('bottomgallery')) : ?>
				<div id="bottomgallery_wrapper">
                    <div id="bottomgallery" class="row-fluid">
                        <jdoc:include type="modules" name="bottomgallery" style="ajgrid" grid="<?php echo $bottomgallery_width; ?>" />
                        <div class="clr"></div> 
                    </div>
				</div>	
                <?php endif; ?>

<div id="bottom_wrapper">			
				 

<?php if ($this->countModules('user5 or user6')) : ?>
    <div id="user56">	

					<?php if ($this->countModules('user5')) : ?>
                    <div id="user5w">
                    <div id="user5" class="row-fluid">
                        <jdoc:include type="modules" name="user5" style="ajgrid" grid="<?php echo $user5_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    </div>
                    <?php endif; ?>  
					
					<?php if ($this->countModules('user6')) : ?>
                    <div id="user6w">
                    <div id="user6" class="row-fluid">
                        <jdoc:include type="modules" name="user6" style="ajgrid" grid="<?php echo $user6_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    </div>
                    <?php endif; ?> 
	</div>
<?php endif; ?>				

</div>

<div id="footer-w"><div id="footer">
<jdoc:include type="modules" name="footermenu"/>
<?php include "social.php"; ?>          
<div class="copyright">Copyright &copy; <?php echo (date("Y")); ?> <?php $config = new JConfig(); echo $config->sitename; ?> <br /><?php echo $templatecopy; ?></div>
<!--  Der Link / Copyright Text darf nicht entfernt oder verändert werden. Lizenz erhalten sie unter www.JooThemes.net - The link / copyright text must not be removed or altered. License is available at www.JooThemes.net! -->
<div class="clr"></div>
</div>
<hr class="foot">
</div>

<div class="stickysocial">
<?php include "social-sticky.php"; ?> 
</div>

<jdoc:include type="modules" name="debug" style="none" />
	<?php // Google Analytics Tracking Code
	if($analyticsCode) {echo '<script type="text/javascript">'; echo $analyticsCode; echo '</script>';}?>
</body>
</html>