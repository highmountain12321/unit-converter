<?php

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2017 Jordan Brauer <jbrauer.inc@gmail.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UnitConverter\Unit\Energy;

/**
 * NewtonMeter unit data class.
 *
 * @version 1.0.0
 * @since 1.0.0
 * @author Andrew Boerema <1569403+andrewboerema@users.noreply.github.com>
 */
class NewtonMeter extends EnergyUnit
{
  protected function configure () : void
  {
    $this
      ->setName("newton meter")

      ->setSymbol("Nm")

      ->setUnits(1)
      ;
  }
}
