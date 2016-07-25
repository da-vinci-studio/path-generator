<?php

namespace spec\Dvs\PathGenerator;

use Dvs\PathGenerator\PathGenerator;
use PhpSpec\ObjectBehavior;

/**
 * @mixin \Dvs\PathGenerator\PathGenerator
 */
class PathGeneratorSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(PathGenerator::class);
    }

    public function it_should_generate_path_from_name()
    {
        $this->generatePathFromName($name = 'b63e5491-3e6a-32c5-89fb-bfc0eb131d40')->shouldReturn(
            str_replace('%s', DIRECTORY_SEPARATOR, 'b%s6%s3%se%s5')
        );
    }
}
