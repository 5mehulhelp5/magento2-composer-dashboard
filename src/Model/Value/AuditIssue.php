<?php

namespace Corrivate\ComposerDashboard\Model\Value;

class AuditIssue
{
    public const SEVERITY_UNKNOWN = 1;
    public const SEVERITY_CRITICAL = 2;
    public const SEVERITY_HIGH = 3;
    public const SEVERITY_MEDIUM = 4;
    public const SEVERITY_LOW = 5;
    public const SEVERITY_LABELS = [
        self::SEVERITY_UNKNOWN => 'unknown',
        self::SEVERITY_CRITICAL => 'critical',
        self::SEVERITY_HIGH => 'high',
        self::SEVERITY_MEDIUM => 'medium',
        self::SEVERITY_LOW => 'low'
    ];

    public function __construct(
        public readonly string $package,
        public readonly string $title,
        public readonly string $cve,
        public readonly string $link,
        public readonly int    $severity,
        public readonly string $severity_original,
        public readonly string $reported
    )
    {
    }
}
