<?php declare(strict_types = 1);

namespace ApiPlatformTools\Doctrine\Traits;

trait Entity
{
    use CreatedUpdated;
    use Id;
    use IsActive;
    use Version;
}
