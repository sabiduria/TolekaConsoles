<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lastimexlot $lastimexlot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lastimexlot->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lastimexlot->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lastimexlot'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lastimexlot form content">
            <?= $this->Form->create($lastimexlot) ?>
            <fieldset>
                <legend><?= __('Edit Lastimexlot') ?></legend>
                <?php
                    echo $this->Form->control('produit');
                    echo $this->Form->control('unit');
                    echo $this->Form->control('lastimexlot');
                    echo $this->Form->control('newlastnum');
                    echo $this->Form->control('used');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
