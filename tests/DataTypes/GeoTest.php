<?php

use PHPUnit\Framework\TestCase;
use F9WebLtd\QrCode\DataTypes\Geo;

class GeoTest extends TestCase
{
    public function test_it_generates_the_proper_format_for_a_geo_coordinate(): void
    {
        $geo = new Geo();
        $geo->create([10.254, -30.254]);

        $properFormat = 'geo:10.254,-30.254';

        $this->assertEquals($properFormat, strval($geo));
    }
}
