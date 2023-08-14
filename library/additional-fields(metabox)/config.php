<?php

add_action('cmb2_admin_init', 'post_type_additioal_field' );

function post_type_additioal_field(){

	/**
	 * 
	 * 	For Custom Post type
	 * 
	 */
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

	/**
	 * 
	 * 	For Page title, subtitle & background image
	 * 
	 */

	
	$commet_cmb = new_cmb2_box(array(
		'id'			=> '_header-fields',
		'title'			=> __('Header Fields','commet'),
		'object_types'	=> array('page')
	));

	// Title 
	// $commet_cmb -> add_field(array(
	// 	'name'			=> __('Title Text' ,'commet'),
	// 	'id'			=> '_title',
	// 	'type'			=> 'text',
	// 	'desc'			=> __('header title here...','commet'),
	// 	'default'		=> __('Default','commet')
	// ));

	// Subtitle
	$commet_cmb -> add_field([
		'id'			=> '_subtitle',
		'name'			=> __('Sub-title Text','commet'),
		'type'			=> 'text',
		'desc'			=> __('header subtitle here...','commet'),
		'default'		=> __('Default subtitle here.','commet')
	]);

	// Image
	$commet_cmb -> add_field([
		'id'			=> '_bg-image',
		'name'			=> __('Background Image','commet'),
		'type'			=> 'file',
		'default'		=> get_template_directory_uri().'/images/bg/18.jpg',
		'desc'			=> __('title backround image here...','commet')
	]);



	/**
	 * 
	 * This is for Home slider button name, url, select 
	 * 
	 * First Button Filds
	 * 
	 */

	$home_slider_button =  new_cmb2_box(array(
		'id'			=> '_additional-home-slider-button-fields',
		'title'			=> __('Slider Button Fields','commet'),
		'object_types'	=> array('commet-home-slider')
	));

	$home_slider_button -> add_field(array(
		'name'			=> __('First Button Text' ,'commet'),
		'id'			=> '_first-button-text',
		'type'			=> 'text',
		'desc'			=> __('button text', 'commet')
	));

	$home_slider_button -> add_field(array(
		'name'			=> __('First Button Type' ,'commet'),
		'id'			=> '_first-button-type',
		'type'			=> 'select',
		'options'		=> array(
			'transparent'	=> 'Transparent BG',
			'red'			=> 'Red BG'
		),
		'desc'			=> __('button bg color')
	));

	/**
	 * 
	 * This is for Home slider button name, url, select 
	 * 
	 * Second Button Filds
	 * 
	 */

	$home_slider_button -> add_field(array(
		'name'			=> __('Second Button Text' ,'commet'),
		'id'			=> '_second-button-text',
		'type'			=> 'text',
		'desc'			=> __('button text', 'commet')
	));


	$home_slider_button -> add_field(array(
		'name'			=> __('Second Button Type' ,'commet'),
		'id'			=> '_second-button-type',
		'type'			=> 'select',
		'options'		=> array(
			'transparent'	=> 'Transparent BG',
			'red'			=> 'Red BG'
		),
		'desc'			=> __('button bg color')
	));



	/**
	 * 
	 * 	Slider Additional List
	 * 
	 */

	$home_slider = new_cmb2_box(array(
		'id'			=> '_slider-additional-fields',
		'title'			=> __('Slider Additional Fields','commet'),
		'object_types' 	=> array('commet-home-slider')
	));

	$home_slider -> add_field(array(
		'name'			=> __('Subtitle' ,'commet'),
		'id'			=> '_subtitle-text',
		'type'			=> 'text',
		'desc'			=> __('Slider subtitle here','commet')
	));


}

