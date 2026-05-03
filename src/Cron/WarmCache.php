<?php

namespace Corrivate\ComposerDashboard\Cron;

use Corrivate\ComposerDashboard\Model\Composer\Audit;
use Corrivate\ComposerDashboard\Model\Composer\InstalledPackages;
use Corrivate\ComposerDashboard\Model\Config\Settings;

class WarmCache
{
    public function __construct(
        private readonly Audit             $audit,
        private readonly InstalledPackages $installedPackages,
        private readonly Settings          $settings
    ) {
    }

    public function execute(): void
    {
        if (!$this->settings->warmCache()) {
            return;
        }
        $this->audit->getRows();
        $this->installedPackages->getRows();
    }
}
