<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chauffeur $chauffeur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chauffeur->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chauffeur->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chauffeurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="chauffeurs form content">
            <?= $this->Form->create($chauffeur) ?>
            <fieldset>
                <legend><?= __('Edit Chauffeur') ?></legend>
                <?php
                    echo $this->Form->control('prenomch');
                    echo $this->Form->control('nomch');
                    echo $this->Form->control('telch');
                    echo $this->Form->control('pays');
                    echo $this->Form->control('passeportch');
                    echo $this->Form->control('date');
                    echo $this->Form->control('datevisa');
                    echo $this->Form->control('datepass');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('camion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
