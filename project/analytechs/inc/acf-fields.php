<?php
if (!defined('ABSPATH')) exit;

// Créer la page d'options
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Paramètres du thème',
        'menu_title' => 'Paramètres du thème',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// Ajouter les champs pour les informations de contact
acf_add_local_field_group(array(
    'key' => 'group_contact_info',
    'title' => 'Informations de contact',
    'fields' => array(
        array(
            'key' => 'field_contact_email',
            'label' => 'Email',
            'name' => 'contact_email',
            'type' => 'email',
            'required' => 1,
        ),
        array(
            'key' => 'field_contact_phone',
            'label' => 'Téléphone',
            'name' => 'contact_phone',
            'type' => 'text',
            'required' => 1,
        ),
        array(
            'key' => 'field_contact_address',
            'label' => 'Adresse',
            'name' => 'contact_address',
            'type' => 'textarea',
            'required' => 1,
        ),
        array(
            'key' => 'field_social_linkedin',
            'label' => 'URL LinkedIn',
            'name' => 'social_linkedin',
            'type' => 'url',
        ),
        array(
            'key' => 'field_social_twitter',
            'label' => 'URL Twitter',
            'name' => 'social_twitter',
            'type' => 'url',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-general-settings',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
));