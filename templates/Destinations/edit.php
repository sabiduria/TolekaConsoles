<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Destination $destination
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $destination->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $destination->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Destinations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinations form content">
            <?= $this->Form->create($destination) ?>
            <fieldset>
                <legend><?= __('Edit Destination') ?></legend>
                <?php
                    echo $this->Form->control('pays');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('corridor');
                    echo $this->Form->control('codeprea');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('tonnagerequis');
                    echo $this->Form->control('tonnageenvoye');
                    echo $this->Form->control('tonnagerestant');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('consignee');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
