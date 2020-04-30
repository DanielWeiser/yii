<?php

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Sum</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['sum'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
