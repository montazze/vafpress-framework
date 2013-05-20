<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_head', $head_info); ?>

<div class="customEditor">
	<div class="wp-editor-tools">
		<div class="custom_upload_buttons hide-if-no-js wp-media-buttons"><?php do_action( 'media_buttons' ); ?></div>
	</div>
	<textarea class="vp-input" id="<?php echo $name; ?>" rows="10" cols="50" name="<?php echo $name; ?>" rows="3"><?php echo esc_html( wp_richedit_pre($value) ); ?></textarea>
	<p><span><?php _e('Enter in some text');?></span></p>
</div>

<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_foot'); ?>