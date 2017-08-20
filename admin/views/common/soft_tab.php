<?php
use \admin\components\AdminUrlService;
$mapping = [
    "index" => [
        'title' => "软件列表",
        "url" => AdminUrlService::buildUrl("/soft/index"),
        "status" => 1
    ],
    "set" => [
        'title' => "设置软件",
        "url" => AdminUrlService::buildUrl("/soft/set"),
        "status" => 1
    ]
];
?>

<ul class="tab_title style_1">
    <?php foreach( $mapping as $_key => $_item ):?>
        <?php
        if( isset($_item['status']) && !$_item['status'] ){
            continue;
        }
        ?>
        <li <?php if($current == $_key ):?> class="current" <?php endif;?>>
            <a href="<?=$_item['url'];?>"><?=$_item["title"];?></a>
        </li>
    <?php endforeach;?>
</ul>
