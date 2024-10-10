<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prealerte $prealerte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Prealerte'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prealerte form content">
            <?= $this->Form->create($prealerte) ?>
            <fieldset>
                <legend><?= __('Add Prealerte') ?></legend>
                <?php
                    echo $this->Form->control('camion');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('eta');
                    echo $this->Form->control('position');
                    echo $this->Form->control('datearrivee');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('commentaire');
                    echo $this->Form->control('moisgestion');
                    echo $this->Form->control('loadingplan');
                    echo $this->Form->control('destinationg');
                    echo $this->Form->control('exitpoint');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
