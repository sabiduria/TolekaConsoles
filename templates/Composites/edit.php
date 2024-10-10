<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Composite $composite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $composite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $composite->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Composites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="composites form content">
            <?= $this->Form->create($composite) ?>
            <fieldset>
                <legend><?= __('Edit Composite') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('code');
                    echo $this->Form->control('threshold');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
