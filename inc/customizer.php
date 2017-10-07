<?php
	function fc_customizer_settings($wp_customize)
	{
		$wp_customize->add_section('social', [
			'title' => __('Header Social', 'fc'),
			'description' => sprintf(__('Area for customizing header\'s social icons')),
			'priority' => 130
		]);



		$wp_customize->add_setting('first_button_icon', [
			'default' => 'fa fa-facebook',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('first_button_icon', [
			'label' => 'First button icon',
			'section' => 'social',
			'priority' => 20
		]);



		$wp_customize->add_setting('first_button_url', [
			'default' => '#',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('first_button_url', [
			'label' => 'First button URL',
			'section' => 'social',
			'priority' => 20
		]);





		$wp_customize->add_setting('second_button_icon', [
			'default' => 'fa fa-twitter',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('second_button_icon', [
			'label' => 'Second button icon',
			'section' => 'social',
			'priority' => 20
		]);



		$wp_customize->add_setting('second_button_url', [
			'default' => '#',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('second_button_url', [
			'label' => 'Second button URL',
			'section' => 'social',
			'priority' => 20
		]);




		$wp_customize->add_setting('third_button_icon', [
			'default' => 'fa fa-linkedin',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('third_button_icon', [
			'label' => 'Third button icon',
			'section' => 'social',
			'priority' => 20
		]);



		$wp_customize->add_setting('third_button_url', [
			'default' => '#',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('third_button_url', [
			'label' => 'Third button URL',
			'section' => 'social',
			'priority' => 20
		]);





		$wp_customize->add_setting('fourth_button_icon', [
			'default' => 'fa fa-youtube',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('fourth_button_icon', [
			'label' => 'Fourth button icon',
			'section' => 'social',
			'priority' => 20
		]);



		$wp_customize->add_setting('fourth_button_url', [
			'default' => '#',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('fourth_button_url', [
			'label' => 'Fourth button URL',
			'section' => 'social',
			'priority' => 20
		]);



		/**********************************************/
		$wp_customize->add_section('info', [
			'title' => __('Info', 'fc'),
			'description' => sprintf(__('Section for general site information')),
			'priority' => 130
		]);

		$wp_customize->add_setting('email', [
			'default' => 'example@example.com',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('email', [
			'label' => 'Email address',
			'section' => 'info',
			'priority' => 20
		]);


		$wp_customize->add_setting('email_icon', [
			'default' => 'fa fa-envelope-o',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('email_icon', [
			'label' => 'Email icon',
			'section' => 'info',
			'priority' => 20
		]);





		$wp_customize->add_setting('phone', [
			'default' => '+37493775960',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('phone', [
			'label' => 'Phone number',
			'section' => 'info',
			'priority' => 20
		]);


		$wp_customize->add_setting('phone_icon', [
			'default' => 'fa fa-phone',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control('phone_icon', [
			'label' => 'Phone icon',
			'section' => 'info',
			'priority' => 20
		]);
	}
	add_action('customize_register', 'fc_customizer_settings');