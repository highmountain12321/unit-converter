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

namespace UnitConverter\Calculator\Formula\Temperature;

use UnitConverter\Calculator\Formula\AbstractFormula;

/**
 * Abstract formula for all other temperature formula to extend. Common methods
 * are contained here.
 *
 * @version 1.0.0
 * @since 0.8.1
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
abstract class TemperatureFormula extends AbstractFormula
{
    /**
     * A common method for fahrenheit conversions.
     *
     * @param int|float|string $value
     * @param int $precision
     * @param string $polarity A valid calculator method for positive/negative operations.
     * @return int|float|string
     */
    final protected function fahrenheit($value, $precision, string $polarity)
    {
        // XXX: this formula assumes all calculators can accept strings, as it's sthe safest type.
        $divisor = $this->calculator->div('5', '9');
        $x = $this->calculator->{$polarity}($value, (string) static::MAGIC_NUMBER);
        $mulResult = $this->calculator->mul($x, $divisor);
        $result = $this->calculator->round($mulResult, $precision);

        $this->plugVariables($result, $value);

        return $result;
    }
}
