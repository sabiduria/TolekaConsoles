<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolead3 $rolead3
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rolead3'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rolead3 form content">
            <?= $this->Form->create($rolead3) ?>
            <fieldset>
                <legend><?= __('Add Rolead3') ?></legend>
                <?php
                    echo $this->Form->control('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
