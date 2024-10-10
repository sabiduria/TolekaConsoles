<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reconditionnement $reconditionnement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Reconditionnement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reconditionnement form content">
            <?= $this->Form->create($reconditionnement) ?>
            <fieldset>
                <legend><?= __('Add Reconditionnement') ?></legend>
                <?php
                    echo $this->Form->control('bagid');
                    echo $this->Form->control('zone');
                    echo $this->Form->control('description');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('dateid');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('dateok');
                    echo $this->Form->control('iduser2');
                    echo $this->Form->control('produit');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
