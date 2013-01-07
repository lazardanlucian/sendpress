<?php

// Prevent loading this file directly
if ( !defined('SENDPRESS_VERSION') ) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

class SendPress_Module_Sendgrid extends SendPress_Module{
	
	function html($sp){
		$hide = false;
		$plugin_path = '';
		if( $this->is_pro_active() ){
			$plugin_path = 'sendpress-pro/extensions/sendpress-sender-sendgrid.php';
		}
	?>
		<h4>SendGrid</h4>
		<form method="post" id="post">
			<div class="description">
				Connects to SendGrid to send your SendPress emails. A SendGrid account is required to use this option.
			</div>
			<?php $this->buttons($plugin_path);?>
			<input type="hidden" name="plugin_path" value="<?php echo $plugin_path; ?>" />
			<input class="action" type="hidden" name="action" value="module-activate-sendpress-pro" />
			<?php wp_nonce_field($sp->_nonce_value); ?>
		</form>

	<?php
	}

}