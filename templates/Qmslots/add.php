<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qmslot $qmslot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Qmslots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="qmslots form content">
            <?= $this->Form->create($qmslot) ?>
            <fieldset>
                <legend><?= __('Add Qmslot') ?></legend>
                <?php
                    echo $this->Form->control('lotnumber');
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('dleid');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
