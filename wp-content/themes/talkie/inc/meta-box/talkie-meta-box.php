<?php
add_filter( 'rwmb_meta_boxes', 'talkie_meta_boxes' );
function talkie_meta_boxes( $meta_boxes ) {	

	// Team Member Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Team Member Details','talkie' ),
		'post_types'	=> 'talkieteam',
		'fields'		=> array(
					
			array(
				'id'		=> 'talkie_team_designation',
				'name'		=> esc_html__( 'Trainer Designation :','talkie' ),				
				'type'		=> 'text'				
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'		=> 'talkie_team_facebook',
				'name'		=> esc_html__( 'Facebook Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_team_twitter',
				'name'		=> esc_html__( 'Twitter Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_team_google',
				'name'		=> esc_html__( 'Google Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_team_github',
				'name'		=> esc_html__( 'Github Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_team_insta',
				'name'		=> esc_html__( 'Instagram Url :','talkie' ),				
				'type'		=> 'text'
			),
			
		),
	);
	// Testimonial Member Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Testimonial Member Details','talkie' ),
		'post_types'	=> 'testimonial',
		'fields'		=> array(
					
			array(
				'id'		=> 'talkie_testimonial_designation',
				'name'		=> esc_html__( 'Designation :','talkie' ),				
				'type'		=> 'text'				
			),
			array(
				'id'		=> 'talkie_testimonial_company',
				'name'		=> esc_html__( 'Company :','talkie' ),				
				'type'		=> 'text'				
			),
		),
	);
	// Portfolio Member Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Portfolio Project Details','talkie' ),
		'post_types'	=> 'portfolio',
		'fields'		=> array(
					
			array(
				'id'		=> 'talkie_portfolio_client',
				'name'		=> esc_html__( 'Created by:','talkie' ),				
				'type'		=> 'text'				
			),
			array(
				'id'		=> 'talkie_portfolio_skill',
				'name'		=> esc_html__( 'Skills :','talkie' ),				
				'type'		=> 'text'				
			),
			array(
				'id' => 'portfolio_data',
				'type' => 'date',
				'name' => esc_html__( 'Project Completed on:', 'talkie' ),
				'js_options' => array(
				  'dateFormat' => 'dd/mm/yy',
				),
				'class' => 'data-arrivo',
			),

			array(
				'type'	=>'divider',
			),
			array(
				'id'		=> 'talkie_portfolio_facebook',
				'name'		=> esc_html__( 'Facebook Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_portfolio_twitter',
				'name'		=> esc_html__( 'Twitter Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_portfolio_google',
				'name'		=> esc_html__( 'Google Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_portfolio_github',
				'name'		=> esc_html__( 'Github Url :','talkie' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'talkie_portfolio_insta',
				'name'		=> esc_html__( 'Instagram Url :','talkie' ),				
				'type'		=> 'text'
			),

			array(
				'type'	=>'divider',
			),

			array(
				'id'		=> 'portfolio_detail',
				'name'		=> esc_html__( 'Project Link :','talkie' ),				
				'type'		=> 'text'
			),

		),
	);
	return $meta_boxes;
}
?>
