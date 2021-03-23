<?php defined( '_JEXEC' ) or die( 'Restricted index access' );

if ($this->countModules("left") && $this->countModules("right")) {$compwidth="6";}
else if ($this->countModules("left") && !$this->countModules("right")) { $compwidth="9";}
else if (!$this->countModules("left") && $this->countModules("right")) { $compwidth="9";}
else if (!$this->countModules("left") && !$this->countModules("right")) { $compwidth="12";}

$user1_count = $this->countModules('user1');
if ($user1_count > 4) { 
$user1_width = $user1_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$user1_width = $user1_count > 0 ? ' span' . floor(12 / $user1_count) : '';}

$user2_count = $this->countModules('user2');
if ($user2_count > 4) { 
$user2_width = $user2_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$user2_width = $user2_count > 0 ? ' span' . floor(12 / $user2_count) : '';}

$user3_count = $this->countModules('user3');
if ($user3_count > 4) { 
$user3_width = $user3_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$user3_width = $user3_count > 0 ? ' span' . floor(12 / $user3_count) : '';}

$user4_count = $this->countModules('user4');
if ($user4_count > 4) { 
$user4_width = $user4_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$user4_width = $user4_count > 0 ? ' span' . floor(12 / $user4_count) : '';}

$user5_count = $this->countModules('user5');
if ($user5_count > 4) { 
$user5_width = $user5_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$user5_width = $user5_count > 0 ? ' span' . floor(12 / $user5_count) : '';}

$user6_count = $this->countModules('user6');
if ($user6_count > 4) { 
$user6_width = $user6_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$user6_width = $user6_count > 0 ? ' span' . floor(12 / $user6_count) : '';}

$bottomgallery_count = $this->countModules('bottomgallery');
if ($bottomgallery_count > 4) { 
$bottomgallery_width = $bottomgallery_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$bottomgallery_width = $bottomgallery_count > 0 ? ' span' . floor(12 / $bottomgallery_count) : '';}

$usermap_count = $this->countModules('usermap');
if ($usermap_count > 4) { 
$usermap_width = $usermap_count > 0 ? ' span' . floor(12 / 4) : '';} else {
$usermap_width = $usermap_count > 0 ? ' span' . floor(12 / $usermap_count) : '';}





























































































/* Der Link / Copyright Text darf nicht entfernt oder verändert werden. Lizenz erhalten sie unter www.JooThemes.net - The link / copyright text must not be removed or altered. License is available at www.JooThemes.net!

Dieser Code darf ohne gültige Liezenz nicht geändert werden */

if (JRequest::getVar('view') == 'featured')  
{
     $templatecopy = 'Design and theme by JooThemes.net - <a href="http://joothemes.net" title="Joomla Themes" target="_blank">Joomla Templates</a>.';
}
elseif (JRequest::getVar('view') == 'article')  
{
     $templatecopy = 'Design and theme by JooThemes.net - <a href="http://joothemes.net" title="Free Joomla Themes" target="_blank">Free Joomla Templates</a>.';
}
else
{ 
     $templatecopy = 'Design and theme by JooThemes.net - <a href="http://joothemes.net" title="Responsive Joomla Themes" target="_blank">Responsive Joomla Templates</a>.';
}

?>
