<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params		= $this->item->params;
$images = json_decode($this->item->images);
$urls = json_decode($this->item->urls);
$canEdit	= $this->item->params->get('access-edit');
$user		= JFactory::getUser();

?>
<div class="item-page<?php echo $this->pageclass_sfx?>">
<?php if ($params->get('show_title')) : ?>
	<h1 class="item-page-title<?php echo $this->pageclass_sfx?>"><?php if ($params->get('link_titles') && !empty($this->item->readmore_link)) : ?><a href="<?php echo $this->item->readmore_link; ?>"><?php echo $this->escape($this->item->title); ?></a><?php else : ?><?php echo $this->escape($this->item->title); ?><?php endif; ?></h1>
<?php endif; ?>

<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date')) or ($params->get('show_parent_category')) or ($params->get('show_tags')) or ($params->get('show_hits'))) : ?>
<dl class="article-info muted">
<?php if ($params->get('show_category')) : ?>
		<dd class="category-name">
			<?php $title = $this->escape($this->item->category_title);
					$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catid)) . '">' . $title . '</a>'; ?>
			<?php if ($params->get('link_category')) : ?>
				<?php echo $url; ?>
				<?php else : ?>
				<?php echo JText::sprintf('', $title); ?>
			<?php endif; ?>
		</dd>
<?php endif; ?>
<?php if ($params->get('show_publish_date')) : ?>
		<dd class="published">
        <?php echo date('l, d F Y', strtotime($this->item->publish_up)); ?>
		</dd>
<?php endif; ?>
<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
	<dd class="createdby" itemtype="https://schema.org/Person" itemscope="" itemprop="author">
		<?php $author =  $this->item->author; ?>
		<?php $author = ($this->item->created_by_alias ? $this->item->created_by_alias : $author);?>

			<?php if (!empty($this->item->contactid ) &&  $params->get('link_author') == true):?>
				<?php 	echo JHtml::_('link',JRoute::_('index.php?option=com_contact&view=contact&id='.$this->item->contactid),$author); ?>

			<?php else :?>
				<?php echo $author; ?>
			<?php endif; ?>
	</dd><?php endif; ?>




<?php if ($params->get('show_hits')) : ?>
	 <dd class="hits">
	<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
	</dd>
<?php endif; ?>



</dl>
<?php endif; ?>



<span class="pull-right">
	<?php if (!$this->print) : ?>
		<?php if ($params->get('show_print_icon')) : ?>
			<span class="jt-print"><?php echo JHtml::_('icon.print_popup',  $this->item, $params); ?></span>
		<?php endif; ?>
		<?php if ($params->get('show_email_icon')) : ?>
        	<span class="jt-mail"><?php echo JHtml::_('icon.email',  $this->item, $params); ?></span>
		<?php endif; ?>
		<?php if ($canEdit) : ?>
			<span class="jt-edit"><?php echo JHtml::_('icon.edit', $this->item, $params); ?></span>
		<?php endif; ?>
	<?php endif; ?>

</span>

<?php if (isset ($this->item->toc)) : ?>
	<?php echo $this->item->toc; ?>
<?php endif; ?>

<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position=='0')) OR  ($params->get('urls_position')=='0' AND empty($urls->urls_position) ))
		OR (empty($urls->urls_position) AND (!$params->get('urls_position')))): ?>
<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>
<div class="clr"></div>
<?php if ($params->get('access-view')):?>
<?php  if (isset($images->image_fulltext) and !empty($images->image_fulltext)) : ?>
<?php $imgfloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext; ?>
<span class="article_img"><div class="thumbnail pull-<?php echo htmlspecialchars($imgfloat); ?>">
<img
	<?php if ($images->image_fulltext_caption):
		echo ' title="' .htmlspecialchars($images->image_fulltext_caption) .'"';
	endif; ?>
	src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>"/>
</div></span>
<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative):
	echo $this->item->pagination;
 endif;
?>
<div class="article-body">
<?php echo $this->item->text; ?>
</div>

<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative):
	 echo $this->item->pagination;?>
<?php endif; ?>

<?php if (isset($urls) AND ((!empty($urls->urls_position)  AND ($urls->urls_position=='1')) OR ( $params->get('urls_position')=='1') )): ?>
<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>
	<?php //optional teaser intro text for guests ?>
<?php elseif ($params->get('show_noauth') == true and  $user->get('guest') ) : ?>

	<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	<div class="pull-<?php echo htmlspecialchars($imgfloat); ?> thumbnail"> <img
			<?php if ($images->image_intro_caption):
				echo ' title="' .htmlspecialchars($images->image_intro_caption) .'"';
			endif; ?>
			src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/> </div>
	<?php endif; ?>
	<?php if (!$params->get('show_intro')) : ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>
	<?php endif; ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>
    <?php echo $this->item->introtext; ?>
    
	<?php //Optional link to let them register to see the whole article. ?>
	<?php if ($params->get('show_readmore') && $this->item->fulltext != null) :
		$link1 = JRoute::_('index.php?option=com_users&view=login');
		$link = new JURI($link1);?>
		<p class="readmore">
		<a href="<?php echo $link; ?>">
		<?php $attribs = json_decode($this->item->attribs);  ?>
		<?php
		if ($attribs->alternative_readmore == null) :
			echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
		elseif ($readmore = $this->item->alternative_readmore) :
			echo $readmore;
			if ($params->get('show_readmore_title', 0) != 0) :
			    echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
			endif;
		elseif ($params->get('show_readmore_title', 0) == 0) :
			echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
		else :
			echo JText::_('COM_CONTENT_READ_MORE');
			echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
		endif; ?></a>
		</p>
	<?php endif; ?>
<?php endif; ?>

<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
	 echo $this->item->pagination;?>
<?php endif; ?>

<?php echo $this->item->event->afterDisplayContent; ?>
</div>
<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
        <div class="tags">
       
		<?php $this->item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
		<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>
		</div>
<?php endif; ?>
