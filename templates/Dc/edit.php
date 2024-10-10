<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dc $dc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dc->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Dc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dc form content">
            <?= $this->Form->create($dc) ?>
            <fieldset>
                <legend><?= __('Edit Dc') ?></legend>
                <?php
                    echo $this->Form->control('num');
                    echo $this->Form->control('numdc');
                    echo $this->Form->control('numbp');
                    echo $this->Form->control('licence');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('tranche');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('tonnage');
                    echo $this->Form->control('nbitems');
                    echo $this->Form->control('liendc');
                    echo $this->Form->control('tonnagerestant');
                    echo $this->Form->control('tonnageutilise');
                    echo $this->Form->control('nbpaquets');
                    echo $this->Form->control('seuil');
                    echo $this->Form->control('numdckcc');
                    echo $this->Form->control('numtransport');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
