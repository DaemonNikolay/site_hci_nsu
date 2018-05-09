<?php if (count($model)): ?>
    <?php foreach ($model as $item): ?>
        <div class="well">
            <h3><?= $item->for_the_group ?></h3>
        </div>
    <?php endforeach ?>
<?php else: ?>
    <h2>Расписание отсутствует!</h2>
<?php endif; ?>