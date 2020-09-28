<?php
function add_gcf_interface() {
	add_options_page('Global Custom Fields', 'Informations Générale', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Informations Générale</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Horaires</strong><br />
		<ul>
			<li>Lundi : <input type="text" name="lundi" value="<?php echo get_option('lundi'); ?>"> </li>
			<li>Mardi : <input type="text" name="mardi" value="<?php echo get_option('mardi'); ?>"></li>
			<li>Mercredi : <input type="text" name="mercredi" value="<?php echo get_option('mercredi'); ?>"></li>
			<li>Jeudi : <input type="text" name="jeudi" value="<?php echo get_option('jeudi'); ?>"></li>
			<li>Vendredi : <input type="text" name="vendredi" value="<?php echo get_option('vendredi'); ?>"></li>
			<li>Samedi : <input type="text" name="samedi" value="<?php echo get_option('samedi'); ?>"></li>
			<li>Dimanche : <input type="text" name="dimanche" value="<?php echo get_option('dimanche'); ?>"></li>
		</ul>
		<textarea name="horaires" rows="8" cols="80"><?php echo get_option('horaires'); ?></textarea>
	</p>
	<p><strong>Facebook:</strong><br />
	<input type="url" name="facebook" size="45" value="<?php echo get_option('facebook'); ?>" /></p>
	<p><strong>Instagram:</strong><br />
	<input type="url" name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" /></p>
	<p><strong>Tripadvisor:</strong><br />
	<input type="url" name="tripadvisor" size="45" value="<?php echo get_option('tripadvisor'); ?>" /></p>

	<p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="header,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche,horaires,facebook,instagram,tripadvisor" />

	</form>
	</div>
	<?php
}

?>
