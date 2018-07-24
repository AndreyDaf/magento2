<?php
/**
 * OSS Theme module activation
 *
 * @category  OSS
 * @package   OSS\Theme
 * @author    Andrii Dubina
 * @copyright 2018 OSS
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'OSS_Theme',
    __DIR__
);
