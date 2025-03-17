<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist'; // Correct path to Bootstrap 5 assets installed by npm

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css', // Reference Bootstrap 5 CSS
        'css/site.css', // Your custom CSS file
    ];
    public $js = [
        'js/bootstrap.bundle.min.js', // Reference Bootstrap 5 JavaScript bundle
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // Remove 'yii\bootstrap5\BootstrapAsset' if you're using the custom npm Bootstrap
    ];
}
