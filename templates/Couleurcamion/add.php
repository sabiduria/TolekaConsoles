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
            <?= $this->Html->link(__('List Couleurcamion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="couleurcamion form content">
            <?= $this->Form->create($couleurcamion) ?>
            <fieldset>
                <legend><?= __('Add Couleurcamion') ?></legend>
                <?php
                    echo $this->Form->control('couleur');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
