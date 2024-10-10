<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $faq->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Faq'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="faq form content">
            <?= $this->Form->create($faq) ?>
            <fieldset>
                <legend><?= __('Edit Faq') ?></legend>
                <?php
                    echo $this->Form->control('question');
                    echo $this->Form->control('reponse');
                    echo $this->Form->control('questionfr');
                    echo $this->Form->control('reponsefr');
                    echo $this->Form->control('date');
                    echo $this->Form->control('datemiseajour');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('idagent');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
