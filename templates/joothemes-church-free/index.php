<?php
/*******************************************************************************************

Church Free Joomla! 3 Responsive Template - January 2017
Package tpl-joothemes-church-j3.zip
Version 1.0

@copyright	Copyright (C) 2017 JooThemes.net 

http://joothemes.net

*******************************************************************************************/
defined('_JEXEC') or die;

include 'includes/params.php';

if ($params->get('compile_sass', '0') === '1')
{
	require_once "includes/sass.php";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php
 include 'includes/head.php'; ?>
<body class="default-layout">
<?php
 if($layout=='boxed'){ ?>
<?php  $path= JURI::base().'templates/'.$this->template."/images/elements/pattern".$pattern.".png"; ?>
<style type="text/css">
 body {
    background: url("<?php  echo $path ; ?>") repeat fixed center top rgba(0, 0, 0, 0);
 }
</style>
<div class="layout-boxed">
  <?php  } ?>
<div id="wrap">
<!--Navigation-->
<header id="header" class="header header--fixed-left hide-from-print" role="banner">
<!--top-->

<!--top-->
<div id="navigation">
<div class="navbar navbar-default" role="navigation">
<div class="container container-margin">
<div class="navbar-header">
     <div id="brand">
        <a href="<?php  echo $this->params->get('logo_link')   ?>">
             <img style="width:<?php  echo $this->params->get('logo_width')   ?>px; height:<?php  echo $this->params->get('logo_height')   ?>px; " src="<?php  echo $this->params->get('logo_file')   ?>" alt="<?php echo htmlspecialchars($app->getCfg('sitename')); ?>" />
        </a>
      </div>
</div>
<div class="collapse center_top">

<?php  if ($this->countModules('navigation')) : ?>
                        <nav class="navigation" role="navigation">
                                <jdoc:include type="modules" name="navigation" style="none" />
                        </nav>
                        <?php  endif; ?>
<?php if ($superfish == 'yes' ) : ?>
	<?php $doc->addStyleSheet('templates/' . $this->template . '/css/superfish.css');  ?>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/hoverIntent.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>

    <script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#navigation .menu').superfish({
				animation: {height:'show'},	// slide-down effect without fade-in
				 speed:         'fast',
				delay:		 600			// 1.2 second delay on mouseout
			});
		});
	</script>
<?php endif; ?>
</div>
<div class="pull-right-absolute">
		 <?php include "social.php"; ?>
</div>
</div>
</div>
</div>
</header>
<div class="clearfix"></div>
<!--Navigation-->
<section <?php if ($menu->getActive()!== $menu->getDefault()) {echo 'class="section_m"'; }else {}?> >
<!--fullwidth-->
<?php  if($this->countModules('fullwidth')) : ?>
<div id="fullwidth">
<div class="row">
<jdoc:include type="modules" name="fullwidth" style="block"/>
</div>
</div>
<?php  endif; ?>
<!--fullwidth-->
<!--Breadcrum-->
<?php  if($this->countModules('breadcrumbs')) : ?>
<div id="breadcrumbs">
<div class="container">
<jdoc:include type="modules" name="breadcrumbs" style="block" />
</div>
</div>
<!--Breadcrum-->
<?php  endif; ?>
<!--Showcase-->
<?php  if($this->countModules('showcase1 or showcase2 or showcase3 or showcase4 or showcase_top')) : ?>
    <div id="showcase">
        <div class="container">
            <div class="row">
            	<?php  if($this->countModules('showcase_top')) : ?>

                	<div class="col-md-12">
           				<jdoc:include type="modules" name="showcase_top" style="block"/>
                    </div>

                <?php  endif; ?>

            	<?php  if($this->countModules('showcase1')) : ?>

                	<div class="col-md-6 pull-left">
           				<jdoc:include type="modules" name="showcase1" style="block"/>
                    </div>

                <?php  endif; ?>
                <?php  if($this->countModules('showcase2')) : ?>

                	<div class="col-md-6 pull-right">
           				<jdoc:include type="modules" name="showcase2" style="block"/>
                    </div>

								<div class="clr"></div>
                <?php  endif; ?>
                  <?php  if($this->countModules('showcase3')) : ?>

                	<div class="col-md-6 pull-left">
           				<jdoc:include type="modules" name="showcase3" style="block"/>
                    </div>

                <?php  endif; ?>
                 <?php  if($this->countModules('showcase4')) : ?>

                	<div class="col-md-6 pull-right">
           				<jdoc:include type="modules" name="showcase4" style="block"/>
                    </div>

                <?php  endif; ?>

            </div>
        </div>
    </div>
<?php  endif; ?>
<!--Showcase-->
<!-- box -->
<?php  if($this->countModules('top_about')) : ?>
<div id="top_about">
    <div class="container">
    <div class="row">
			<div class="col-md-12">
            <jdoc:include type="modules" name="top_about" style="block" />
        </div>
				</div>
    </div>
</div>
<?php  endif; ?>
<!-- box-->
<!--Feature-->
<?php  if($this->countModules('feature')) : ?>
<div id="feature">
<div class="container">
<div class="row">
	<div class="col-md-12">
<jdoc:include type="modules" name="feature" style="block" />
</div>
</div>
</div>
</div>
<?php  endif; ?>
<!--Feature-->
<!-- box -->
<?php  if($this->countModules('box')) : ?>
<div id="top_box">
    <div class="container">
    <jdoc:include type="modules" name="box" style="block" />
    <?php  if($this->countModules('box-bottom')) : ?>
    	<div class="box-bottom">
    	<jdoc:include type="modules" name="box-bottom" style="none" />
        </div>
	<?php  endif; ?>
    </div>
</div>
<?php  endif; ?>
<!-- box-->
<!-- Content -->
<div class="container">
<div id="main" class="row show-grid">
<!-- Component -->
<div id="container" class="col-sm-<?php  echo (12-$leftcolgrid-$rightcolgrid); ?>">
<!-- Content-top Module Position -->
<?php  if($this->countModules('content-top')) : ?>
<div id="content-top">
<div class="row">
<jdoc:include type="modules" name="content-top" style="block" />
</div>
</div>
<?php  endif; ?>
<!-- Front page show or hide -->
<?php
	$app = JFactory::getApplication();
	$menu = $app->getMenu();

	if ($frontpageshow){
		// show on all pages
		?>
<div id="main-box">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<?php
	} else {

		if ($menu->getActive() !== $menu->getDefault()) {
			// show on all pages but the default page
			?>
<div id="main-box">
<jdoc:include type="component" />
</div>
<?php
 }} ?>
<!-- Front page show or hide -->
<!-- Below Content Module Position -->
<?php  if($this->countModules('content-bottom')) : ?>
<div id="content-bottom">
<div class="row">
<jdoc:include type="modules" name="content-bottom" style="block" />
</div>
</div>
<?php  endif; ?>
</div>
<!-- Right -->
<?php  if($this->countModules('right')) : ?>
<div id="sidebar-2" class="col-sm-<?php  echo $rightcolgrid; ?>">
<jdoc:include type="modules" name="right" style="block" />
</div>
<?php  endif; ?>
</div>
</div>
<!-- Content -->
<!-- bottom -->
<?php  if($this->countModules('bottom')) : ?>
<div id="bottom">
<div class="container">
<div class="row">
<jdoc:include type="modules" name="bottom" style="block" />
</div>
</div>
</div>
<?php  endif; ?>
<?php  if($this->countModules('bottom_gallery')) : ?>
<div id="bottom_gallery"><div class="container">
	<div class="row">
			<div class="col-md-12">

    <jdoc:include type="modules" name="bottom_gallery" style="block" />
			</div>
	</div>
</div>
</div>
<?php  endif; ?>
<!-- bottom -->
<!-- footer -->
<?php  if($this->countModules('footer')) : ?>
	<div id="footer">
		<div class="container">
			  <div class="row">
	<div class="col-md-12">
							<jdoc:include type="modules" name="footer" style="block" />
  </div>
			  </div>
		</div>
	</div>
<?php  endif; ?>
<!-- footer -->
<!-- footer-map -->
<?php  if($this->countModules('footer-map')) : ?>
	<div id="footer-map">
               <jdoc:include type="modules" name="footer-map" style="block" />
	</div>
<?php  endif; ?>
<!-- footer -->
<div id="footer_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div class="custom"  >
	                <p>Copyright &copy; <?php echo (date("Y")); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?><br />Design and theme by JooThemes.net - <a href="http://joothemes.net" target="_blank">Church Free Joomla Templates</a>.</p></div>
					<!--  The link / copyright text must not be removed or altered. License is available at www.JooThemes.net! - Der Link / Copyright Text darf nicht entfernt oder verändert werden. Lizenz erhalten sie unter www.JooThemes.net. -->
            </div>
        </div>
    </div>
</div>
<div id="footer_social">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	 <?php include "social.php"; ?>
            </div>
        </div>
    </div>
</div>
<!-- copy -->
<!-- menu slide -->
<?php  if($this->countModules('panelnav')): ?>
<div id="panelnav">
    <jdoc:include type="modules" name="panelnav" style="none" />
</div><!-- end panelnav -->
<?php  endif;// end panelnav  ?>
<!-- menu slide -->
<a href="#" class="back-to-top iconn-arrow_up"></a>
<jdoc:include type="modules" name="debug" />

</section>
</div>
<!-- page -->
<!-- JS -->
<script type="text/javascript" src="<?php echo $tpath; ?>/js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="<?php echo $tpath; ?>/js/image-scale.min.js"></script>
<script type="text/javascript" src="<?php echo $tpath; ?>/js/jquery.tinyTips.js"></script>
<script type="text/javascript" src="<?php echo $tpath; ?>/js/tools.js"></script>
<script type="text/javascript" src="<?php echo $tpath; ?>/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="<?php echo $tpath; ?>/js/jquery.corner.js"></script>
<script type="text/javascript" src="<?php echo $tpath; ?>/js/template.min.js"></script>
<!-- JS -->
</body>
</html>
