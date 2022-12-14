<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 if(!ossn_loggedin_user()){
	 return;
 }
?>
<div class="newseed-uinfo">
    <img class="user-icon-small" src="<?php echo ossn_loggedin_user()->iconURL()->small; ?>"/>

    <div class="name">
        <a href="<?php echo ossn_loggedin_user()->profileURL(); ?>"><?php echo ossn_loggedin_user()->fullname; ?></a>
        <a class="edit-profile" href="<?php echo ossn_loggedin_user()->profileURL('/edit'); ?>">
            <?php echo ossn_print('edit:profile'); ?></a>
    </div>
</div>
