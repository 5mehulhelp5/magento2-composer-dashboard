<?php

namespace Corrivate\ComposerDashboard\Api;


interface AuditInterface
{
    /** @return mixed[] */
    public function getList(): array;
}
