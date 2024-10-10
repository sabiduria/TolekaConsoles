<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Checkingsticker $checkingsticker
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $checkingsticker->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $checkingsticker->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Checkingstickers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="checkingstickers form content">
            <?= $this->Form->create($checkingsticker) ?>
            <fieldset>
                <legend><?= __('Edit Checkingsticker') ?></legend>
                <?php
                    echo $this->Form->control('lotnumber');
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('tonnageload');
                    echo $this->Form->control('items');
                    echo $this->Form->control('horse');
                    echo $this->Form->control('trailers');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('report');
                    echo $this->Form->control('idtrip');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('inspecteur');
                    echo $this->Form->control('moisgestion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
