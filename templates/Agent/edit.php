<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Agent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agent form content">
            <?= $this->Form->create($agent) ?>
            <fieldset>
                <legend><?= __('Edit Agent') ?></legend>
                <?php
                    echo $this->Form->control('matricule');
                    echo $this->Form->control('prenom');
                    echo $this->Form->control('nom');
                    echo $this->Form->control('datenaissance');
                    echo $this->Form->control('dateengagement');
                    echo $this->Form->control('genre');
                    echo $this->Form->control('fonction');
                    echo $this->Form->control('equipe');
                    echo $this->Form->control('reportto');
                    echo $this->Form->control('telephone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
