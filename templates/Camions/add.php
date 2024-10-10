<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Camion $camion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Camions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="camions form content">
            <?= $this->Form->create($camion) ?>
            <fieldset>
                <legend><?= __('Add Camion') ?></legend>
                <?php
                    echo $this->Form->control('trans');
                    echo $this->Form->control('ch');
                    echo $this->Form->control('marque');
                    echo $this->Form->control('type');
                    echo $this->Form->control('horse');
                    echo $this->Form->control('trailer1');
                    echo $this->Form->control('trailer2');
                    echo $this->Form->control('tonnage');
                    echo $this->Form->control('couleur');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
