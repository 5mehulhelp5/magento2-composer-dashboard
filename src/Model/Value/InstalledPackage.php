<?php

namespace Corrivate\ComposerDashboard\Model\Value;

class InstalledPackage
{
    public const SEMVER_UP_TO_DATE = 4;
    public const SEMVER_SAFE_UPDATE = 3;
    public const SEMVER_UPDATE_POSSIBLE = 2;
    public const SEMVER_UNKNOWN = 1;
    public const SEMVER_LABELS = [
        self::SEMVER_UP_TO_DATE => 'up to date',
        self::SEMVER_SAFE_UPDATE => 'minor update',
        self::SEMVER_UPDATE_POSSIBLE => 'update possible',
        self::SEMVER_UNKNOWN => 'unknown'
    ];

    public function __construct(
        public readonly string $package,
        public readonly bool   $direct,
        public readonly string $homepage,
        public readonly string $source,
        public readonly string $version,
        public readonly string $release_age,
        public readonly string $release_date,
        public readonly string $latest,
        public readonly string $latest_status,
        public readonly string $latest_release_date,
        public readonly string $description,
        public readonly bool   $abandoned,
        public readonly int    $semver_status // Using numeric codes makes this sortable
    )
    {
    }

    public function isOutdated(): bool
    {
        return $this->abandoned
            || $this->semver_status != self::SEMVER_UP_TO_DATE;
    }
}
