<?php
/**
 * Rokezzz_Bakery
 *
 * @category    Rokezzz
 * @package     Rokezzz_Bakery
 * @author      Michał Kaszak <michalosmpk@gmail.com>
 * @copyright   Copyright (c) 2024 Michał Kaszak
 */

namespace Rokezzz\Rokezzz_Bakery\Block;

use Magento\Framework\View\Element\Html\Links;

class RokezzzLinks extends Links {
    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml(): string
    {
        if (false != $this->getTemplate()) {
            return parent::_toHtml();
        }

        $html = '';
        if ($this->getLinks()) {
            $html = '<ul class="Footer__List">';
            foreach ($this->getLinks() as $link) {
                $html .= $this->renderLink($link);
            }
            $html .= '</ul>';
        }

        return $html;
    }
}