<?php

declare (strict_types = 1);

namespace Dvs\PathGenerator;

use Dvs\PathGenerator\Interfaces\PathGenerator as PathGeneratorInterface;

/**
 * Class PathGenerator.
 */
class PathGenerator implements PathGeneratorInterface
{
    /**
     * @param string $name
     * @param int    $length
     *
     * @return string
     */
    public function generatePathFromName(string $name, int $length = 5)
    {
        return implode(DIRECTORY_SEPARATOR, str_split(substr($name, 0, $length)));
    }
}
