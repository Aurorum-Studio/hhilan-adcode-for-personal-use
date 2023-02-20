<?php

namespace aurorum\ad1;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [ 
  (new Extend\Frontend('forum'))
  ->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {
         $config->BBCodes->addCustom(
           '[ad1]',
           '<script type="text/javascript">
	              atOptions = {
		               'key' : '71536f111d7bb9b5742774f8b5717246',
		               'format' : 'iframe',
		               'height' : 60,
		               'width' : 468,
		               'params' : {}
	               };
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformat.com/71536f111d7bb9b5742774f8b5717246/invoke.js"></scr' + 'ipt>');
</script>'
        );
    })
];
