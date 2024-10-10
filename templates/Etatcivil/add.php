<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatcivil $etatcivil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Etatcivil'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="etatcivil form content">
            <?= $this->Form->create($etatcivil) ?>
            <fieldset>
                <legend><?= __('Add Etatcivil') ?></legend>
                <?php
                    echo $this->Form->control('statutmarital');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
