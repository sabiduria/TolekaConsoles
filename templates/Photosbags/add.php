<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photosbag $photosbag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Photosbags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="photosbags form content">
            <?= $this->Form->create($photosbag) ?>
            <fieldset>
                <legend><?= __('Add Photosbag') ?></legend>
                <?php
                    echo $this->Form->control('bagid');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
