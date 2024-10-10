<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tach $tach
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Taches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="taches form content">
            <?= $this->Form->create($tach) ?>
            <fieldset>
                <legend><?= __('Add Tach') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('idpj');
                    echo $this->Form->control('datelimite');
                    echo $this->Form->control('assignea');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('iduser2');
                    echo $this->Form->control('date');
                    echo $this->Form->control('datemiseajour');
                    echo $this->Form->control('commentaireexec');
                    echo $this->Form->control('datecomexec');
                    echo $this->Form->control('conclusion');
                    echo $this->Form->control('dateconcl');
                    echo $this->Form->control('depenseusd');
                    echo $this->Form->control('revenus');
                    echo $this->Form->control('gainusd');
                    echo $this->Form->control('position');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
