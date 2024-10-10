<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suggestion $suggestion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $suggestion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $suggestion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Suggestions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suggestions form content">
            <?= $this->Form->create($suggestion) ?>
            <fieldset>
                <legend><?= __('Edit Suggestion') ?></legend>
                <?php
                    echo $this->Form->control('suggestion');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                    echo $this->Form->control('reponse');
                    echo $this->Form->control('iduser2');
                    echo $this->Form->control('date2');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
