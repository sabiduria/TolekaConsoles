<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teneur $teneur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teneur->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teneur->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Teneurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="teneurs form content">
            <?= $this->Form->create($teneur) ?>
            <fieldset>
                <legend><?= __('Edit Teneur') ?></legend>
                <?php
                    echo $this->Form->control('produit');
                    echo $this->Form->control('teneur');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
