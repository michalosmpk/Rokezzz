<?php
/**
 * Rokezzz_Bakery
 *
 * @category    Rokezzz
 * @package     Rokezzz_Bakery
 * @author      Michał Kaszak <michalosmpk@gmail.com>
 * @copyright   Copyright (c) 2024 Michał Kaszak
 */

namespace Rokezzz\Rokezzz_Bakery\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Helper\Context;
use \Magento\Framework\App\Http\Context as HttpContext;

class Data extends AbstractHelper
{
    /**
     * @var HttpContext
     */
    private $httpContext;

    public function __construct(
        Context $context,
        HttpContext $httpContext
    ) {
        parent::__construct($context);
        $this->httpContext = $httpContext;
    }

    /**
     * Get user login state
     *
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        $isLoggedIn = $this->httpContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
        return (bool)$isLoggedIn;
    }
}