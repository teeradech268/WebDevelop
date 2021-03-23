<?php
//no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Images
$SocialLinkSticky[]= $this->params->get( '!', "" );
$SocialTitleSticky = array ("","Follow us on Facebook","Follow us on Twitter","Follow us on Google Plus","Follow us on Youtube","Follow us on Vimeo","Flickr","Pinterest","Picasa","Linkedin","RSS Feed","Evernote","Dribbble","Tumblr","Behance","StumbleUpon","Dropbox","SoundCloud","Last.fm","Forrst","DeviantArt","Blogger","Instagram","Yahoo","GrooveShark","Digg","Skype","ShareThis","Bebo","Zerply","Myspace","Wikipedia","Technorati","AddThis","Delicious","Xing","Quora","Github");
for ($j=1; $j<=40; $j++){
	$SocialLinkSticky[$j]		= $this->params->get ("SocialLinkSticky".$j,"" );

}; ?>

<ul class="social">
		<?php for ($i=1; $i<=40; $i++){ if ($SocialLinkSticky[$i] != null) { ?>
            <li><a href="<?php echo $SocialLinkSticky[$i] ?>" rel="nofollow" class="social-icon social_<?php echo $i ?>" title="<?php echo $SocialTitleSticky[$i] ?>"><?php echo $SocialTitleSticky[$i] ?></a></li>
        <?php }};  ?>
</ul>
