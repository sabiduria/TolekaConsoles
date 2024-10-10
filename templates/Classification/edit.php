<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classification $classification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classification->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classification->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Classification'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="classification form content">
            <?= $this->Form->create($classification) ?>
            <fieldset>
                <legend><?= __('Edit Classification') ?></legend>
                <?php
                    echo $this->Form->control('classe');
                    echo $this->Form->control('description');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
