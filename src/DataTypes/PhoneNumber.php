<?php

namespace F9WebLtd\QrCode\DataTypes;

class PhoneNumber implements DataTypeInterface
{
    /**
     * The prefix of the QrCode.
     *
     * @var string
     */
    protected $prefix = 'tel:';

    /**
     * The phone number.
     *
     * @var
     */
    protected $phoneNumber;

    /**
     * Generates the DataType Object and sets all of its properties.
     *
     * @param $arguments
     */
    public function create(array $arguments)
    {
        $this->phoneNumber = $arguments[0];
    }

    public function __toString(): string
    {
        return $this->prefix.$this->phoneNumber;
    }
}
