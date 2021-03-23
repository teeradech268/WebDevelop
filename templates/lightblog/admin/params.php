<style type="text/css">

/* Template Style
---------------------------------------------------------------------- */
<?php // Google Font Body
if ($googleFontBody) { ?>
	body {
		font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontBody'));?>', Verdana, Arial, Helvetica, sans-serif;
		font-weight: 400;
	}
<?php } ?>

<?php // Google Font Regular
if ($googleFont) { ?>
	.sitedescription,
	.btn-primary, .flex-caption, div.list-title,
	.componentheading, a.readmore, #footer ul.menu, #footer ul.menu li a, .accordion-heading,
	blockquote, .btn-group,
	dl.article-info,
	dt.article-info-term,
	.pagination ul li a,
	.pagination p.counter.pull-right,
	.categories-list h4.item-title,
	div.contact fieldset legend,
	div.blog-featured fieldset legend,
	div.search fieldset legend,
	.cat-children h3.page-header,
	.lead,
	#k2FrontendEditToolbar h2,
	div.catItemHeader h3.catItemTitle,
	span.catItemHits,
	div.catItemCategory,
	div.catItemTagsBlock,
	div.catItemCommentsLink,
	div.itemHeader h2.itemTitle,
	div.itemToolbar ul li span.itemTextResizerTitle,
	div.itemToolbar ul li a.itemCommentsLink,
	div.itemToolbar ul li a.itemPrintLink span,
	div.itemToolbar ul li a.itemEmailLink span,
	div.itemRatingBlock span,
	div.itemRatingLog,
	span.itemHits,
	div.itemCategory,
	div.itemTagsBlock,
	div.itemRelCat,
	div.itemRelAuthor,
	div.itemNavigation a.itemNext,
	div.itemCommentsForm form label.formComment,
	div.itemCommentsForm form label.formName,
	div.itemCommentsForm form label.formEmail,
	div.itemCommentsForm form label.formUrl,
	div.tagItemHeader h2.tagItemTitle,
	div.tagItemCategory,
	div.userItemHeader h3.userItemTitle,
	div.userItemCategory,
	div.userItemTagsBlock,
	div.userItemCommentsLink,
	div.latestItemHeader h2.latestItemTitle,
	div.latestItemCategory,
	div.genericItemCategory span,
	div.genericItemCategory a,
	div.genericItemHeader h2.genericItemTitle,
	div.genericItemReadMore,
	div.k2ItemsBlock ul li a.moduleItemTitle,
	div.k2ItemsBlock ul li span.moduleItemDateCreated,
	div.k2ItemsBlock ul li a.moduleItemCategory,
	div.k2ItemsBlock ul li div.moduleItemTags,
	div.k2ItemsBlock ul li a.moduleItemComments,
	div.k2ItemsBlock ul li span.moduleItemHits,
	div.k2LatestCommentsBlock ul li span.lcUsername,
	div.k2LatestCommentsBlock ul li span.lcCommentDate,
	div.k2LatestCommentsBlock ul li span.lcItemTitle,
	div.k2LatestCommentsBlock ul li span.lcItemCategory,
	div.itemComments ul.itemCommentsList li span.commentDate,
	div.itemComments ul.itemCommentsList li span.commentAuthorName,
	div.k2UserBlock div.k2UserBlockDetails span.ubName,
	div.k2UsersBlock ul li a.ubUserName,
	.k2AccountPage th.k2ProfileHeading,
	#k2Container span.catItemAddLink a.modal,
	#k2Container span.userItemAddLink a.modal {
		font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFont'));?>', sans-serif;
		font-weight: 400;
	}
<?php } ?>
<?php // Google Font Bold
if ($googleFont) { ?>
	h1, h2, h3, h4, h5, h6,
	.logo a, 
	div.profile legend,
	.hello,
	div.k2ItemsBlock ul li div.moduleItemTags b,
	span.itemNavigationTitle {
		font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFont'));?>', sans-serif;
		font-weight: 400;
	}
<?php } ?>

<?php // Google Font 300
if ($googleFont) { ?>
	h2.item-page-title {
		font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFont'));?>', sans-serif;
		font-weight: 300;
	}
<?php } ?>

<?php // Google Font 700
if ($googleFont) { ?>
	#nav ul li a, #menu-icon{
		font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFont'));?>', sans-serif;
		font-weight: 700;
	}
<?php } ?>

</style>