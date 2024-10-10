<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moisgestion $moisgestion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Moisgestion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="moisgestion form content">
            <?= $this->Form->create($moisgestion) ?>
            <fieldset>
                <legend><?= __('Add Moisgestion') ?></legend>
                <?php
                    echo $this->Form->control('moisgestion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
