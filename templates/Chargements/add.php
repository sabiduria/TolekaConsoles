<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chargement $chargement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chargements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="chargements form content">
            <?= $this->Form->create($chargement) ?>
            <fieldset>
                <legend><?= __('Add Chargement') ?></legend>
                <?php
                    echo $this->Form->control('numlot');
                    echo $this->Form->control('loadassistant');
                    echo $this->Form->control('loadhelper1');
                    echo $this->Form->control('loadhelper2');
                    echo $this->Form->control('operateur1');
                    echo $this->Form->control('operateur2');
                    echo $this->Form->control('date');
                    echo $this->Form->control('user');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
