<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecamion $typecamion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typecamion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typecamion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Typecamion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typecamion form content">
            <?= $this->Form->create($typecamion) ?>
            <fieldset>
                <legend><?= __('Edit Typecamion') ?></legend>
                <?php
                    echo $this->Form->control('type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
