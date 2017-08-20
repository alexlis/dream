<?php
namespace blog\assets;

use common\service\GlobalUrlService;
use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [];

    public function registerAssetFiles($view){
        $this->css = [
            GlobalUrlService::buildStaticUrl("/bootstrap/css/bootstrap.min.css"),
            GlobalUrlService::buildStaticUrl("/bootstrap/css/font-awesome.min.css"),
            "css/screen.min.css"
        ];
        $this->js = [
            GlobalUrlService::buildStaticUrl("/jquery/jquery.min.js"),
            GlobalUrlService::buildStaticUrl("/bootstrap/js/bootstrap.min.js"),
            GlobalUrlService::buildStaticUrl("/plugin/layer/layer.js"),
            "js/public.js",
            "js/access.js",
        ];
        parent::registerAssetFiles($view);
    }
}
