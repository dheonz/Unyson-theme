<?php


if ( ! defined('FW') ){
    die('Forbidden');
}

$options = array(
    
    'section_1' => array(
        'title' => __('Unyson Section', 'dogshelter'),
        'options' => array(

            'option_1' => array(
                'type' => 'Logo Text',
                'label' => __('your logo text', 'dogshelter'),
                'desc' => __('Enter your logo', 'dogshelter'),
                'wp-customizer-args' => array(
                    'priority' => 3,
                ),

            ),

        ),
    ),
    'panel_1' => array(
        'title' => __('Unyson Panel', 'dogshelter'),
        'options' => array(

            'section_11' => array(
                'title' => __('Unyson Section #1', 'dogshelter'),
                'options' => array(

                    'option_11' => array(
                        'type' => 'text',
                        'value' => 'Brand Message',
                        'label' => __('Brand Message #1', 'dogshelter'),
                        'desc' => __('Enter your Message', 'dogshelter'),
                    ),

                ),
            ),

            'section_22' => array(
                'title' => __('Unyson Section #2','dogshelter'),
                'options' => array(

                    'option_22' => array(
                        'type' => 'text',
                        'value' => 'Your message',
                        'label' => __('Brand Message #2', 'dogshelter'),
                        'desc' => __('Option Description', 'dogshelter'),
                    ),
                    'option_33' => array(
                        'type' => 'text',
                        'value' => 'Brand Message',
                        'label' => __('Brand Message #3', 'dogshelter'),
                        'desc' => __('Option Description', 'dogshelter'),
                    ),

                ),
            ),

        ),
    ),

);