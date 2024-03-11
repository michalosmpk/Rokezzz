<?php
/**
 * Rokezzz_Bakery
 *
 * @category    Rokezzz
 * @package     Rokezzz_Bakery
 * @author      Michał Kaszak <michalosmpk@gmail.com>
 * @copyright   Copyright (c) 2024 Michał Kaszak
 */

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::THEME,
    'frontend/Rokezzz/Rokezzz_Bakery',
    __DIR__
);