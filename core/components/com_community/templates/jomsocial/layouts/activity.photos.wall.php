<?php
/**
* @copyright (C) 2013 iJoomla, Inc. - All rights reserved.
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author iJoomla.com <webmaster@ijoomla.com>
* @url https://www.jomsocial.com/license-agreement
* The PHP code portions are distributed under the GPL license. If not otherwise stated, all images, manuals, cascading style sheets, and included JavaScript *are NOT GPL, and are released under the IJOOMLA Proprietary Use License v1.0
* More info at https://www.jomsocial.com/license-agreement
*/
defined('_JEXEC') or die();
?>
<ul class ="cDetailList clrfix">
	<li>
		<!-- Show the Avatar, and surround it with link, if any URL is present. -->
		<div class="avatarWrap">
			<?php if ($url) {
			echo '<a href="' . CRoute::_($param->get('url')) . '">';
			} ?>

			<img src="<?php echo $photo->getThumbURI();?>" class="cAvatar cAvatar-Large" alt="avatar" />

			<?php if ($url)	{ ?>
				</a>
			<?php } ?>
		</div>
		<!-- End Avatar -->

		<!-- Show the Details -->
		<div class="detailWrap alpha"><?php echo JString::substr($act->content, 0, $config->getInt('streamcontentlength'));?></div>
		<!-- End Details -->
	</li>
</ul>
