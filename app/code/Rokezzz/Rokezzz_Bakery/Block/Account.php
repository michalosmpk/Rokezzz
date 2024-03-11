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

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Http\Context as HttpContext;
use Magento\Customer\Model\Context;

class Account extends Template
{
    /**
     * @var HttpContext
     */
    protected $httpContext;

    public function __construct(
        HttpContext $httpContext
    ) {
        $this->httpContext = $httpContext;
    }

    public function isCustomerLoggedId(): bool
    {
        return (bool)$this->httpContext->getValue(Context::CONTEXT_AUTH);
    }
}
