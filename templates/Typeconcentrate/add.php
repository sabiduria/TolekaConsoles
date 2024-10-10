<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeconcentrate $typeconcentrate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Typeconcentrate'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typeconcentrate form content">
            <?= $this->Form->create($typeconcentrate) ?>
            <fieldset>
                <legend><?= __('Add Typeconcentrate') ?></legend>
                <?php
                    echo $this->Form->control('nom');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
