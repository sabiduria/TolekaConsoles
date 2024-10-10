<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecamion $typecamion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Typecamion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typecamion form content">
            <?= $this->Form->create($typecamion) ?>
            <fieldset>
                <legend><?= __('Add Typecamion') ?></legend>
                <?php
                    echo $this->Form->control('type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
