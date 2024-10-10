<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Licence $licence
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Licences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="licences form content">
            <?= $this->Form->create($licence) ?>
            <fieldset>
                <legend><?= __('Add Licence') ?></legend>
                <?php
                    echo $this->Form->control('codelic');
                    echo $this->Form->control('tonnage');
                    echo $this->Form->control('agence');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('typeproduit');
                    echo $this->Form->control('trancheteneur');
                    echo $this->Form->control('periode');
                    echo $this->Form->control('validite');
                    echo $this->Form->control('expiration');
                    echo $this->Form->control('tonnagerestant');
                    echo $this->Form->control('seuil');
                    echo $this->Form->control('frontiere');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('moyentrans');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
