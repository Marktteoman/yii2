<?php

use app\models\User;
use yii\helpers\url;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;


?>
<?php foreach ($models as $model): ?>
    <tr>
        <td>
            Логин: <?=$model ->username?>
        </td>

        <td>
            email: <?=$model ->email?>
        </td>

        <td>
            status: <?=$model ->status?>
        </td>
    </tr>
    <?php
    if ($model -> status == '0'){

        echo '<a class="btn btn-danger" href="' . Url::to(["/site/updstatus", "id" => $model->id]) . '"' .  '>Deactivate' . '</a>';
    }
    else
        {
            echo '<a class="btn btn-primary" href="' . Url::to(["/site/dwnstatus", "id" => $model->id]) . '"' .  '>Activate' . '</a>';
        };
    ?>
    </br>
<?php endforeach; ?>