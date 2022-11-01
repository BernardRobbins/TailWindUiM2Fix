<?php

declare(strict_types=1);

namespace BernardRobbins\TailwindUiM2Fix\Plugin\Magento\Framework\Config\Dom;

use Magento\Framework\Module\Dir;

class UrnResolver
{
    public Dir $dir;

    public function __construct(
        Dir $dir
    ) {
        $this->dir = $dir;
    }

    public function beforeGetRealPath(
        \Magento\Framework\Config\Dom\UrnResolver $subject,
        $fileName
    ) {
        if ($fileName === 'urn:magento:framework:View/Layout/etc/elements.xsd') {
            $fileName = $this->dir->getDir('BernardRobbins_TailwindUiM2Fix') . '/View/Layout/etc/elements.xsd';
        }

        return $fileName;
    }
}
