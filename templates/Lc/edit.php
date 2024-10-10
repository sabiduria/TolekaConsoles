<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lc $lc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lc->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lc form content">
            <?= $this->Form->create($lc) ?>
            <fieldset>
                <legend><?= __('Edit Lc') ?></legend>
                <?php
                    echo $this->Form->control('year');
                    echo $this->Form->control('month');
                    echo $this->Form->control('pk');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
