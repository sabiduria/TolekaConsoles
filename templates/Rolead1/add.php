<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolead1 $rolead1
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rolead1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rolead1 form content">
            <?= $this->Form->create($rolead1) ?>
            <fieldset>
                <legend><?= __('Add Rolead1') ?></legend>
                <?php
                    echo $this->Form->control('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
