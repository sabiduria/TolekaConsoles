<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentsadministratif $documentsadministratif
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $documentsadministratif->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $documentsadministratif->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Documentsadministratif'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="documentsadministratif form content">
            <?= $this->Form->create($documentsadministratif) ?>
            <fieldset>
                <legend><?= __('Edit Documentsadministratif') ?></legend>
                <?php
                    echo $this->Form->control('idemp');
                    echo $this->Form->control('matricule');
                    echo $this->Form->control('document');
                    echo $this->Form->control('type');
                    echo $this->Form->control('categorie');
                    echo $this->Form->control('commentaire');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
