<?php declare(strict_types = 1);

namespace ApiPlatformTools\Doctrine\Traits;

use function get_object_vars;

trait Serializable
{
    public function jsonSerialize(): array
    {
        return get_object_vars(object: $this);
    }
}
