<?php

namespace F9WebLtd\QrCode\DataTypes;

interface DataTypeInterface
{
    /**
     * Generates the DataType Object and sets all of its properties.
     */
    public function create(array $arguments);

    /*
     * Returns the correct QrCode format.
     */
    public function __toString(): string;
}
