<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeControleSsh $typeControleSsh
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeControleSsh->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeControleSsh->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Type Controle Ssh'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typeControleSsh form content">
            <?= $this->Form->create($typeControleSsh) ?>
            <fieldset>
                <legend><?= __('Edit Type Controle Ssh') ?></legend>
                <?php
                    echo $this->Form->control('controle');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
