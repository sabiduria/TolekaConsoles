<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bp $bp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bp form content">
            <?= $this->Form->create($bp) ?>
            <fieldset>
                <legend><?= __('Add Bp') ?></legend>
                <?php
                    echo $this->Form->control('num');
                    echo $this->Form->control('numbp');
                    echo $this->Form->control('licence');
                    echo $this->Form->control('typeproduit');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('tranche');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('agence');
                    echo $this->Form->control('moyentransport');
                    echo $this->Form->control('numautorisation');
                    echo $this->Form->control('etablipar');
                    echo $this->Form->control('date');
                    echo $this->Form->control('modifiepar');
                    echo $this->Form->control('datemodification');
                    echo $this->Form->control('approuvepar');
                    echo $this->Form->control('dateapprobation');
                    echo $this->Form->control('numdc');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
