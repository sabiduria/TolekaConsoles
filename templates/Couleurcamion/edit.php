<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Couleurcamion $couleurcamion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $couleurcamion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $couleurcamion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Couleurcamion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="couleurcamion form content">
            <?= $this->Form->create($couleurcamion) ?>
            <fieldset>
                <legend><?= __('Edit Couleurcamion') ?></legend>
                <?php
                    echo $this->Form->control('couleur');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
