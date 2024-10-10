<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departement $departement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Departement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="departement form content">
            <?= $this->Form->create($departement) ?>
            <fieldset>
                <legend><?= __('Add Departement') ?></legend>
                <?php
                    echo $this->Form->control('nomdpt');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
