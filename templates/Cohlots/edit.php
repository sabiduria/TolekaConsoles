<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cohlot $cohlot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cohlot->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cohlot->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cohlots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cohlots form content">
            <?= $this->Form->create($cohlot) ?>
            <fieldset>
                <legend><?= __('Edit Cohlot') ?></legend>
                <?php
                    echo $this->Form->control('idtrip');
                    echo $this->Form->control('numlot');
                    echo $this->Form->control('numimex');
                    echo $this->Form->control('spec');
                    echo $this->Form->control('date');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('paysdest');
                    echo $this->Form->control('corridor');
                    echo $this->Form->control('horse');
                    echo $this->Form->control('trailer1');
                    echo $this->Form->control('trailer2');
                    echo $this->Form->control('transporteur');
                    echo $this->Form->control('moisgestion');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('tonnage');
                    echo $this->Form->control('tonnageload');
                    echo $this->Form->control('sealdgda');
                    echo $this->Form->control('numbp');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('physicalgrade');
                    echo $this->Form->control('chemicalgrade');
                    echo $this->Form->control('unite');
                    echo $this->Form->control('numdc');
                    echo $this->Form->control('year');
                    echo $this->Form->control('sealsecurite');
                    echo $this->Form->control('synced');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
