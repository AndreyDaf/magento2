<?php
/**
 * OSS_Theme Theme module activation
 *
 * @category  OSS_Theme
 * @package   OSS_Theme\Theme
 * @author    Andrii Dubina
 * @copyright 2018 OSS_Theme
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'OSS_Theme',
    __DIR__
);
