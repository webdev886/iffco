<?php

/**
 * Register meta boxes
 *
 * @since 1.0
 *
 * @param array $meta_boxes
 *
 * @return array
 */

function harmonia_register_meta_boxes( $meta_boxes ) {

	$prefix = '_cmb_';
	$meta_boxes[] = array(

		'id'       => 'format_detail',

		'title'    => esc_html__( 'Format Details', 'harmonia' ),

		'pages'    => array( 'post' ),

		'context'  => 'normal',

		'priority' => 'high',

		'autosave' => true,

		'fields'   => array(

			array(

				'name'             => esc_html__( 'Image', 'harmonia' ),

				'id'               => $prefix . 'image',

				'type'             => 'image_advanced',

				'class'            => 'image',

				'max_file_uploads' => 1,

			),

			array(

				'name'  => esc_html__( 'Gallery', 'harmonia' ),

				'id'    => $prefix . 'images',

				'type'  => 'image_advanced',

				'class' => 'gallery',

			),

			array(

				'name'  => esc_html__( 'Quote', 'harmonia' ),

				'id'    => $prefix . 'quote',

				'type'  => 'textarea',

				'cols'  => 20,

				'rows'  => 2,

				'class' => 'quote',

			),

			array(

				'name'  => esc_html__( 'Audio', 'harmonia' ),

				'id'    => $prefix . 'link_audio',

				'type'  => 'textarea',

				'cols'  => 20,

				'rows'  => 2,

				'class' => 'audio',

				'desc' => 'Ex: https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139083759',

			),

			array(

				'name'  => esc_html__( 'Video', 'harmonia' ),

				'id'    => $prefix . 'link_video',

				'type'  => 'textarea',

				'cols'  => 20,

				'rows'  => 2,

				'class' => 'video',

				'desc' => 'Example: <b>http://www.youtube.com/embed/0ecv0bT9DEo</b> or <b>http://player.vimeo.com/video/47355798</b>',

			),			

		),

	);

	$meta_boxes[] = array(
		'id'       => 'portfolio_detail',
		'title'    => esc_html__( 'Portfolio Format Details', 'harmonia' ),
		'pages'    => array( 'portfolio' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(	
			array(
				'name'             => esc_html__( 'Background Image Page Sub-header', 'harmonia' ),
				'id'               => $prefix . 'portfolio_subheader',
				'type'             => 'image_advanced',			
				'max_file_uploads' => 1,
			),			
		),
	);

	$meta_boxes[] = array(
		'id'       => 'slider_text_detail',
		'title'    => esc_html__( 'Text Align In Slide', 'harmonia' ),
		'pages'    => array( 'slider_text' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(	
			array(
				'name'             => esc_html__( 'Text Align', 'harmonia' ),
				'id'               => $prefix . 'text_align',
				'type'             => 'text',
				'desc' 				=> 'Default text align center.',
			),
			array(
				'name'             => esc_html__( 'Big Text Opacity', 'harmonia' ),
				'id'               => $prefix . 'btext',
				'type'             => 'text',
			),

		),
	);

	$meta_boxes[] = array(

		'id'       => 'page_dt',

		'title'    => esc_html__( 'Page Details', 'harmonia' ),

		'pages'    => array( 'page', 'service','post' ),

		'context'  => 'normal',

		'priority' => 'high',

		'autosave' => true,

		'fields'   => array(	
			array(
				'name'             => esc_html__( 'Background Image Page Sub-header', 'harmonia' ),
				'id'               => $prefix . 'subheader_image',
				'type'             => 'image_advanced',			
				'max_file_uploads' => 1,
			),
			array(
                'name' 				=> esc_html__( 'Page Subtitle', 'harmonia' ),
                'desc'				=> 'Subtitle of page',
                'id'   				=> $prefix . 'page_subtitle',
                'type' 				=> 'text',
            ),				
		),

	);
	
	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'harmonia_register_meta_boxes' );

