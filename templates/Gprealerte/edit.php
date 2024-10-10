<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gprealerte $gprealerte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gprealerte->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gprealerte->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gprealerte'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="gprealerte form content">
            <?= $this->Form->create($gprealerte) ?>
            <fieldset>
                <legend><?= __('Edit Gprealerte') ?></legend>
                <?php
                    echo $this->Form->control('transporteur');
                    echo $this->Form->control('horse');
                    echo $this->Form->control('trailer1');
                    echo $this->Form->control('trailer2');
                    echo $this->Form->control('prenom');
                    echo $this->Form->control('nom');
                    echo $this->Form->control('passeport');
                    echo $this->Form->control('tonnage');
                    echo $this->Form->control('position');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('pays');
                    echo $this->Form->control('code');
                    echo $this->Form->control('eta');
                    echo $this->Form->control('datearrivee');
                    echo $this->Form->control('corridor');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('typetrans');
                    echo $this->Form->control('dateexpvisa');
                    echo $this->Form->control('dateexppass');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('loadingdate');
                    echo $this->Form->control('exitpoint');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
