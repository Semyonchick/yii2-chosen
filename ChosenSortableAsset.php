<?php
/**
 * Created by PhpStorm.
 * User: semyonchick
 * Date: 07.09.2015
 * Time: 16:06
 */

namespace ra\admin\widgets\chosen;


use yii\web\AssetBundle;

class ChosenSortableAsset extends AssetBundle
{
    public $sourcePath = '@ra/widgets/chosen/assets';

    public $js = [
        'js/jquery-chosen-sortable.js'
    ];
}