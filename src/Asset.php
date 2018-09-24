<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

namespace codeup\widgets\select2;

/**
 * Class Asset
 * @package codeup\widgets\select2
 */
class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/select2/dist';

    public $css = [
        'css/select2.min.css',
    ];

    public $js = [
        'js/select2.full.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}