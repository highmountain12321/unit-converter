<?php

declare(strict_types = 1);

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2018 Jordan Brauer <18744334+jordanbrauer@users.noreply.github.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UnitConverter\Tests\Integration\Unit\Energy;

use PHPUnit\Framework\TestCase;
use UnitConverter\Calculator\SimpleCalculator;
use UnitConverter\Registry\UnitRegistry;
use UnitConverter\Unit\Energy\Joule;
use UnitConverter\Unit\Energy\Megaelectronvolt;
use UnitConverter\UnitConverter;

/**
 * Ensure that a joule is infact, a joule.
 *
 * @covers UnitConverter\Unit\Energy\Megaelectronvolt
 * @uses UnitConverter\Unit\Energy\Joule
 * @uses UnitConverter\Unit\AbstractUnit
 * @uses UnitConverter\UnitConverter
 * @uses UnitConverter\Calculator\SimpleCalculator
 * @uses UnitConverter\Calculator\AbstractCalculator
 * @uses UnitConverter\Calculator\Formula\AbstractFormula
 * @uses UnitConverter\Calculator\Formula\UnitConversionFormula
 * @uses UnitConverter\Registry\UnitRegistry
 * @uses UnitConverter\Support\ArrayDotNotation
 * @uses UnitConverter\Support\Collection
 */
class MegaelectronvoltSpec extends TestCase
{
    protected function setUp()
    {
        $this->converter = new UnitConverter(
            new UnitRegistry([
                new Joule(),
                new Megaelectronvolt(),
            ]),
            new SimpleCalculator()
        );
    }

    protected function tearDown()
    {
        unset($this->converter);
    }

    /**
     * @test
     */
    public function assert1MegaelectronvoltIs1decimal60218e_13Joules()
    {
        $expected = 1.60218e-13;
        $actual = $this->converter
            ->convert(1)
            ->from("MeV")
            ->to("J");

        $this->assertEquals($expected, $actual);
    }
}
