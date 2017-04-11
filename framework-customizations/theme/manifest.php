<?php
/**
 * Created by PhpStorm.
 * User: Мария
 * Date: 04.04.2017
 * Time: 8:29
 */
if (!defined('FW')) die('Forbidden');
$manifest['supported_extensions'] = array(
    // 'extension_name' => array(),

    'page-builder' => array(),
   
    'slider' => array(),
    // ...

    /**
     * These extensions are visible on Unyson Extensions page only if are specified here.
     * Because they has no sense to be available for a theme that is not configured to support them.
     */
    'styling' => array(),
    'megamenu' => array(),
);