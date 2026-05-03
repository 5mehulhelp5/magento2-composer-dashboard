<?php
declare(strict_types=1);

namespace Corrivate\ComposerDashboard\ViewModel\Options;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\Phrase;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class AbandonedOptions implements ArgumentInterface, OptionSourceInterface
{
    /** @return array<array{value: bool|string, label: string}> */
    public function toOptionArray(): array
    {
        return [
            ['value' => '', 'label' => ''],
            ['value' => true, 'label' => (string)__('Abandoned')],
            ['value' => false, 'label' => (string)__('No')]
        ];
    }
}
