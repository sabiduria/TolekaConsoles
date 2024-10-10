<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ci $ci
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ci->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ci->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ci'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ci form content">
            <?= $this->Form->create($ci) ?>
            <fieldset>
                <legend><?= __('Edit Ci') ?></legend>
                <?php
                    echo $this->Form->control('lotnumber');
                    echo $this->Form->control('numimex');
                    echo $this->Form->control('cost');
                    echo $this->Form->control('horse');
                    echo $this->Form->control('transporter');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
