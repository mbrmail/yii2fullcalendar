<?php

namespace yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net>
 * @author akorinek <https://github.com/akorinek>
 */

class ListAsset extends AssetBundle
{
    public $sourcePath = '@bower/fullcalendar/dist/list';
    
    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'main.js',
    ];
}
