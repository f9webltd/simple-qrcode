<?php

namespace F9WebLtd\QrCode\DataTypes;

class Geo implements DataTypeInterface
{
    /**
     * The prefix of the QrCode.
     *
     * @var string
     */
    protected $prefix = 'geo:';

    /**
     * The separator between the variables.
     *
     * @var string
     */
    protected $separator = ',';

    /**
     * The latitude.
     *
     * @var
     */
    protected $latitude;

    /**
     * The longitude.
     *
     * @var
     */
    protected $longitude;

    /**
     * Generates the DataType Object and sets all of its properties.
     *
     * @param $arguments
     */
    public function create(array $arguments)
    {
        $this->latitude = $arguments[0];
        $this->longitude = $arguments[1];
    }

    public function __toString(): string
    {
        return $this->prefix.$this->latitude.$this->separator.$this->longitude;
    }
}
