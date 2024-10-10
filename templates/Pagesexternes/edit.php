<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagesexterne $pagesexterne
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagesexterne->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagesexterne->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pagesexternes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pagesexternes form content">
            <?= $this->Form->create($pagesexterne) ?>
            <fieldset>
                <legend><?= __('Edit Pagesexterne') ?></legend>
                <?php
                    echo $this->Form->control('details');
                    echo $this->Form->control('detailsfr');
                    echo $this->Form->control('idcategorie');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
