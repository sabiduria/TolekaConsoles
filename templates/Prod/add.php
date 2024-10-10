<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prod $prod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prod form content">
            <?= $this->Form->create($prod) ?>
            <fieldset>
                <legend><?= __('Add Prod') ?></legend>
                <?php
                    echo $this->Form->control('produit');
                    echo $this->Form->control('designation');
                    echo $this->Form->control('type');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
