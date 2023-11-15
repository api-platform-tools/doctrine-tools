<?php declare(strict_types = 1);

namespace ApiPlatformTools\Doctrine\DBAL;

use ApiPlatformTools\UTCDateTimeImmutable;
use DateTimeInterface;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\DateTimeImmutableType;

class UTCDateTimeImmutableType extends DateTimeImmutableType
{
    use Traits\ConvertToDatabaseValue;
    use Traits\ConvertToPHPValue;

    public function convertToPHPValue($value, AbstractPlatform $platform): ?DateTimeInterface
    {
        return $this->convertToPHPValueForType(value: $value, platform: $platform, object: new UTCDateTimeImmutable(), function: 'date_create_immutable');
    }
}
