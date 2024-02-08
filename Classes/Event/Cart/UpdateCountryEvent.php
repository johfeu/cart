<?php

declare(strict_types=1);

namespace Extcode\Cart\Event\Cart;

/*
 * This file is part of the package extcode/cart.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Extcode\Cart\Domain\Model\Cart\Cart;
use TYPO3\CMS\Extbase\Mvc\Request;

final class UpdateCountryEvent implements UpdateCountryEventInterface
{
    public function __construct(
        private readonly Cart $cart,
        private readonly Request $request
    ) {}

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }
}
