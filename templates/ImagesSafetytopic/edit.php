<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ImagesSafetytopic $imagesSafetytopic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imagesSafetytopic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagesSafetytopic->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Images Safetytopic'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="imagesSafetytopic form content">
            <?= $this->Form->create($imagesSafetytopic) ?>
            <fieldset>
                <legend><?= __('Edit Images Safetytopic') ?></legend>
                <?php
                    echo $this->Form->control('idtopic');
                    echo $this->Form->control('image');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
