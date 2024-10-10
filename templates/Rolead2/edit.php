<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolead2 $rolead2
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rolead2->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rolead2->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rolead2'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rolead2 form content">
            <?= $this->Form->create($rolead2) ?>
            <fieldset>
                <legend><?= __('Edit Rolead2') ?></legend>
                <?php
                    echo $this->Form->control('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
