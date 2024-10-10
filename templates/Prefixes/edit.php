<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prefix $prefix
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prefix->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prefix->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Prefixes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prefixes form content">
            <?= $this->Form->create($prefix) ?>
            <fieldset>
                <legend><?= __('Edit Prefix') ?></legend>
                <?php
                    echo $this->Form->control('prefixe');
                    echo $this->Form->control('type');
                    echo $this->Form->control('status');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
