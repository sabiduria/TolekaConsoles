<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Safetytopic $safetytopic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $safetytopic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $safetytopic->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Safetytopic'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="safetytopic form content">
            <?= $this->Form->create($safetytopic) ?>
            <fieldset>
                <legend><?= __('Edit Safetytopic') ?></legend>
                <?php
                    echo $this->Form->control('sujet');
                    echo $this->Form->control('commentaires');
                    echo $this->Form->control('lieu');
                    echo $this->Form->control('datetopic');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
