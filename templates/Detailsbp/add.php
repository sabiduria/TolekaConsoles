<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detailsbp $detailsbp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Detailsbp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detailsbp form content">
            <?= $this->Form->create($detailsbp) ?>
            <fieldset>
                <legend><?= __('Add Detailsbp') ?></legend>
                <?php
                    echo $this->Form->control('idbp');
                    echo $this->Form->control('numbp');
                    echo $this->Form->control('numlot');
                    echo $this->Form->control('horse');
                    echo $this->Form->control('trailer1');
                    echo $this->Form->control('trailer2');
                    echo $this->Form->control('transporteur');
                    echo $this->Form->control('chauffeur');
                    echo $this->Form->control('passeport');
                    echo $this->Form->control('nationalite');
                    echo $this->Form->control('nbpaquets');
                    echo $this->Form->control('poidsnet');
                    echo $this->Form->control('poidsbrut');
                    echo $this->Form->control('sealdgda');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
