<?php

add_action('cmb2_admin_init', 'post_type_additioal_field' );

function post_type_additioal_field(){
	$commet_cmb = new_cmb2_box(array(
		'id'			=> '_additional-fields',
		'title'			=> __('Additional Fields','commet'),
		'object_types'	=> array('post')
	));

	$commet_cmb -> add_field(array(
		'name'			=> __('Video URL' ,'commet'),
		'id'			=> '_video-url',
		'type'			=> 'oembed',
		'desc'			=> __('You can add video url here.','commet')
	));

	$commet_cmb -> add_field([
		'id'			=> '_audio-url',
		'name'			=> __('Audio URL','commet'),
		'type'			=> 'oembed',
		'desc'			=> __('You can add audio url here.','commet')
	]);

	$commet_cmb -> add_field([
		'id'			=> '_gallery-file',
		'name'			=> __('Slider Image'),
		'type'			=> 'file_list',
		'desc'			=> __('You can add image here...')
	]);
}

