<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sousmenu2 $sousmenu2
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sousmenu2->idsousmenu2],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sousmenu2->idsousmenu2), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sousmenu2'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sousmenu2 form content">
            <?= $this->Form->create($sousmenu2) ?>
            <fieldset>
                <legend><?= __('Edit Sousmenu2') ?></legend>
                <?php
                    echo $this->Form->control('idsousmenu');
                    echo $this->Form->control('url');
                    echo $this->Form->control('page');
                    echo $this->Form->control('nomsousmenu2');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                    echo $this->Form->control('idpage');
                    echo $this->Form->control('nomsousmenu2en');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
