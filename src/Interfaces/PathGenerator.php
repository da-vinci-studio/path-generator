<?php

declare (strict_types = 1);

namespace Dvs\PathGenerator\Interfaces;

/**
 * Class PathGenerator.
 */
interface PathGenerator
{
    /**
     * @param string $name
     * @param int    $length
     *
     * @return string
     */
    public function generatePathFromName(string $name, int $length = 5);
}
