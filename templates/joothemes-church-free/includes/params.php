<?php
	/*------------------------------------------------------------------------
    # author    Gonzalo Suez
    # copyright Copyright © 2013 gsuez.cl. All rights reserved.
    # @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
    # Website   http://www.gsuez.cl
    -------------------------------------------------------------------------*/
	defined('_JEXEC') or die;
	// Getting params from template
	$params = JFactory::getApplication()->getTemplate(true)->params;
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument();
	// Column widths
	$leftcolgrid = ($this->countModules('left') == 0) ? 0 :
	$this->params->get('leftColumnWidth', 3);
	$rightcolgrid = ($this->countModules('right') == 0) ? 0 :
	$this->params->get('rightColumnWidth', 3);
	// Add javascript files
	// Include all compiled plugins (below), or include individual files as needed
	$doc->addScript('templates/' . $this->template . '/js/holder.js');
//	$doc->addScript('templates/' . $this->template . '/js/headroom.min.js');

    JHtml::_('script', 'templates/joothemes-church/js/isotope.pkgd.js');
    JHtml::_('script', 'modules/mod_lastworks/assets/js/isotope.js');

	// Add Stylesheets
	$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.min.css');
	$doc->addStyleSheet('templates/' . $this->template . '/css/icons.css');
	$doc->addStyleSheet('templates/' . $this->template . '/css/template.min.css');
	$doc->addStyleSheet('templates/' . $this->template . '/css/slicknav.css');
	$doc->addStyleSheet('templates/' . $this->template . '/css/custom.css');


	// Variables
	$headdata = $doc->getHeadData();
	$menu = $app->getMenu();
	$active = $app->getMenu()->getActive();
	$pageclass = $params->get('pageclass_sfx');
	$tpath = $this->baseurl . '/templates/' . $this->template;
	// Parameter
	$frontpageshow = $this->params->get('frontpageshow', 0);
	$modernizr = $this->params->get('modernizr');
	$fontawesome = $this->params->get('fontawesome');
	$pie = $this->params->get('pie');
	$materialdesign = $this->params->get('materialdesign');
	$superfish		= $this->params->get('superfish');
	//Layout Options
	$layout = $this->params->get('layout');
	//Pattern options
	$pattern = $this->params->get('pattern');
	// Generator tag
	$this->setGenerator(null);
	// Force latest IE & chrome frame
	$doc->setMetadata('x-ua-compatible', 'IE=edge,chrome=1');
	// Add javascripts
	if ($modernizr == 1){
		$doc->addScript($tpath . '/js/modernizr-2.8.3.js');
	}
	if ($materialdesign == 1){
	$doc->addScript($tpath . '/js/material.min.js');
	}
	// Add stylesheets
	if ($fontawesome == 1){
		$doc->addStyleSheet($tpath . '/css/font-awesome.min.css');
	}
	if ($materialdesign == 1){
	$doc->addStyleSheet($tpath . '/css/material.min.css');
	}
