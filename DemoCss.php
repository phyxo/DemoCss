<?php
/*
 * This file is part of Phyxo package
 *
 * Copyright(c) Nicolas Roudaire  https://www.phyxo.net/
 * Licensed under the GPL version 2.0 license.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugins\DemoCss;

use Phyxo\Extension\AbstractPlugin;
use Symfony\Component\HttpKernel\KernelEvents;

class DemoCss extends AbstractPlugin
{
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'addAssets'
        ];
    }

    public function addAssets()
    {
        $this->addPluginCss('DemoCss', 'css/demo.css');
    }
}
