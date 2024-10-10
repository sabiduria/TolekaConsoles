<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transporteur $transporteur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Transporteurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transporteurs form content">
            <?= $this->Form->create($transporteur) ?>
            <fieldset>
                <legend><?= __('Add Transporteur') ?></legend>
                <?php
                    echo $this->Form->control('nomtrans');
                    echo $this->Form->control('emailtrans');
                    echo $this->Form->control('teltrans');
                    echo $this->Form->control('pays');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
