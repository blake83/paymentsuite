<?php

/*
 * This file is part of the PaymentSuite package.
 *
 * Copyright (c) 2013-2016 Marc Morera
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace PaymentSuite\RedsysBundle\Services;

use PaymentSuite\RedsysBundle\RedsysMethod;

/**
 * Class RedsysMethodFactory.
 */
class RedsysMethodFactory
{
    /**
     * Create new redsys method.
     *
     * @return RedsysMethod new instance
     */
    public function create()
    {
        return new RedsysMethod();
    }
}
