<?php

/*
 * This file is part of zerosonesfun/flarum-bbcode-space.
 *
 * Copyright (c) 2022 Billy Wilcosky.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace ZerosOnesFun\Space;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [ 
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {
         $config->BBCodes->addCustom(
           '[sp]',
           '&nbsp;'
        );
         $config->BBCodes->addCustom(
           '[space]',
           '&nbsp;'
        );
        $config->BBCodes->addCustom(
           '[nbsp]',
           '&nbsp;'
         );
         $config->BBCodes->addCustom(
           '[x]',
           '&nbsp;'
          );
          $config->BBCodes->addCustom(
           '[tab]',
           '&nbsp;&nbsp;&nbsp;&nbsp;'
           );
    })
];