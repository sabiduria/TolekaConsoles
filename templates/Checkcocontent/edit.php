<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Checkcocontent $checkcocontent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $checkcocontent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $checkcocontent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Checkcocontent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="checkcocontent form content">
            <?= $this->Form->create($checkcocontent) ?>
            <fieldset>
                <legend><?= __('Edit Checkcocontent') ?></legend>
                <?php
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('bagid');
                    echo $this->Form->control('poids');
                    echo $this->Form->control('h2o');
                    echo $this->Form->control('co');
                    echo $this->Form->control('vpoids');
                    echo $this->Form->control('vh2o');
                    echo $this->Form->control('vco');
                    echo $this->Form->control('produith2o');
                    echo $this->Form->control('produitco');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('loadperiod');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
