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
use UnitConverter\Measure;
use UnitConverter\Unit\AbstractUnit;
/**
 * Fuel Economy data class. Any new Fuel Economy units should
 * extend this class and implement their name, symbol and units;
 * overriding the $unitOf and $base properties only if necessary.
 *
 * @version 1.0.1
 * @since 0.0.1
 */
abstract class FuelEconomyUnit extends AbstractUnit
{
    protected $base = KilometerPerLitre::class;
    protected $unitOf = Measure::VOLUME;
}
