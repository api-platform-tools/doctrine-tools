<?php declare(strict_types = 1);

namespace ApiPlatformTools\Doctrine\DBAL\Traits;

use ApiPlatformTools\UTCDateTimeImmutable;
use DateTimeInterface;
use Doctrine\DBAL\Platforms\AbstractPlatform;

trait ConvertToDatabaseValue
{
    public function convertToDatabaseValue($value, AbstractPlatform $platform): mixed
    {
        if ($value instanceof DateTimeInterface) {
            $value = $value->setTimezone(timezone: UTCDateTimeImmutable::getUTCTimeZone());
        }

        return parent::convertToDatabaseValue(value: $value, platform: $platform);
    }
}
