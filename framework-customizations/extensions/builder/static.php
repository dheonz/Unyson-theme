<?php
/**
 * Created by PhpStorm.
 * User: Мария
 * Date: 04.04.2017
 * Time: 9:52
 */
if (!defined('FW')) die('Forbidden');

if (!is_admin()) {
    wp_register_style(
        'fw-ext-builder-frontend-grid',
        get_template_directory_uri() .'/framework-customizations/extensions/builder/static/frontend-grid.css',
        array(),
        fw()->theme->manifest->get_version()
    );
}