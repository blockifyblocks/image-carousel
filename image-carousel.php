<?php $block->open('section'); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        $i = 0;
        $block->document->each('@list', function ($prop, $value) use ($block, &$i) {   ?>
            <div class="item<?= $i == 0 ? ' active' : ''; ?>">
            <?= $value->tag('img', 'image', $value); ?>
                <div class="carousel-caption">
                    <?= $value['description'] ?>
                </div>
            </div>
        <?php
            $i++;
        });
    ?>
</div>
<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<?php $block->close();