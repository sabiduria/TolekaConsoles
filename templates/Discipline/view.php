<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discipline $discipline
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Discipline'), ['action' => 'edit', $discipline->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Discipline'), ['action' => 'delete', $discipline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discipline->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Discipline'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Discipline'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="discipline view content">
            <h3><?= h($discipline->typesanction) ?></h3>
            <table>
                <tr>
                    <th><?= __('Typesanction') ?></th>
                    <td><?= h($discipline->typesanction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricule') ?></th>
                    <td><?= h($discipline->matricule) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomagent') ?></th>
                    <td><?= h($discipline->nomagent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Document') ?></th>
                    <td><?= h($discipline->document) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($discipline->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($discipline->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datedebut') ?></th>
                    <td><?= h($discipline->datedebut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datefin') ?></th>
                    <td><?= h($discipline->datefin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($discipline->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Motif') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($discipline->motif)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>