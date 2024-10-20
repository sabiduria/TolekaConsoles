<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clearingrisk $clearingrisk
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clearingrisks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="clearingrisks form content">
            <?= $this->Form->create($clearingrisk) ?>
            <fieldset>
                <legend><?= __('Add Clearingrisk') ?></legend>
                <?php
                    echo $this->Form->control('lotnumber');
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('riskdate');
                    echo $this->Form->control('riskop');
                    echo $this->Form->control('commentrisk');
                    echo $this->Form->control('statutrisk');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
