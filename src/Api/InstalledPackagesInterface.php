<?php

namespace Corrivate\ComposerDashboard\Api;


interface InstalledPackagesInterface
{
    /** @return mixed[] */
    public function getList(): array;
}
