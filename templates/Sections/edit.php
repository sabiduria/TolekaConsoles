<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Section $section
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $section->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $section->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sections form content">
            <?= $this->Form->create($section) ?>
            <fieldset>
                <legend><?= __('Edit Section') ?></legend>
                <?php
                    echo $this->Form->control('nomsection');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
