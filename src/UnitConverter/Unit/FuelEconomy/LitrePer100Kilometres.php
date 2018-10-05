<?php

declare(strict_types = 1);

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2018 Jordan Brauer <jbrauer.inc@gmail.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UnitConverter\Unit\FuelEconomy;

/**
 * LitrePer100Kilometres unit data class.
 *
 * @version 1.0.0
 * @since 0.9.0
 */
class LitrePer100Kilometres extends FuelEconomyUnit
{
    protected function configure(): void
    {
        $this
            ->setName("litre per 100 kilometres")
            ->setSymbol("L/100km")
            ->setUnits(100);
    }
}
