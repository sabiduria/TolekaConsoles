<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prevision $prevision
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Previsions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="previsions form content">
            <?= $this->Form->create($prevision) ?>
            <fieldset>
                <legend><?= __('Add Prevision') ?></legend>
                <?php
                    echo $this->Form->control('mois');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('tonnagemens');
                    echo $this->Form->control('tonnagejour');
                    echo $this->Form->control('camionsmens');
                    echo $this->Form->control('camionsjour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
