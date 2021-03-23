<?php
//no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Images
$SocialLink[]= $this->params->get( '!', "" );
$SocialTitle = array ("","Follow us on Facebook","Follow us on Twitter","Follow us on Google Plus","Follow us on Youtube","Follow us on Vimeo","Flickr","Pinterest","Picasa","Linkedin","RSS Feed","Evernote","Dribbble","Tumblr","Behance","StumbleUpon","Dropbox","SoundCloud","Last.fm","Forrst","DeviantArt","Blogger","Instagram","Yahoo","GrooveShark","Digg","Skype","ShareThis","Bebo","Zerply","Myspace","Wikipedia","Technorati","AddThis","Delicious","Xing","Quora","Github");
for ($j=1; $j<=40; $j++){
	$SocialLink[$j]		= $this->params->get ("SocialLink".$j,"" );

}; ?>

<ul class="social">
		<?php for ($i=1; $i<=40; $i++){ if ($SocialLink[$i] != null) { ?>
            <li><a href="<?php echo $SocialLink[$i] ?>" rel="nofollow" class="social-icon social_<?php echo $i ?>" title="<?php echo $SocialTitle[$i] ?>"><?php echo $SocialTitle[$i] ?></a></li>
        <?php }};  ?>
</ul>
