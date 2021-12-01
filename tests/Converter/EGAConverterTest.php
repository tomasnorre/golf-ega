<?php

declare(strict_types=1);

namespace SeventhGreen\GolfEga\Tests\Converter;

use PHPUnit\Framework\TestCase;
use SeventhGreen\GolfEga\Converter\EGAConverter;

/**
 * @covers \SeventhGreen\GolfEga\Converter\EGAConverter
 */
class EGAConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider ConverterDataProvider
     */
    public function testConverter(float $hcp, float $cr, int $sr, float $expected): void
    {
        $converter = new EGAConverter();
        static::assertEquals(
            $expected,
            $converter->convert($hcp, $cr, $sr)
        );
    }

    public function ConverterDataProvider(): iterable
    {
        yield 'White,  Mens -3,7' => [
            'hcp' => -3.7,
            'cr' => 73.9,
            'sr' => 141,
            'expected' => -3
        ];
        yield 'White,  Mens 8,9' => [
            'hcp' => 8.9,
            'cr' => 73.9,
            'sr' => 141,
            'expected' => 13
        ];
        yield 'Yellow,  Mens -1.0' => [
            'hcp' => -1.0,
            'cr' => 71.7,
            'sr' => 135,
            'expected' => -1
        ];
        yield 'Yellow,  Mens 20,7' => [
            'hcp' => 20.7,
            'cr' => 71.7,
            'sr' => 135,
            'expected' => 24
        ];
    }
}