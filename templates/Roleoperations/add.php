<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleoperation $roleoperation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Roleoperations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="roleoperations form content">
            <?= $this->Form->create($roleoperation) ?>
            <fieldset>
                <legend><?= __('Add Roleoperation') ?></legend>
                <?php
                    echo $this->Form->control('roleop');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
