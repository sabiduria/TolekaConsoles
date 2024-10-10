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
            <?= $this->Html->link(__('Edit Pagesexterne'), ['action' => 'edit', $pagesexterne->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pagesexterne'), ['action' => 'delete', $pagesexterne->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagesexterne->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pagesexternes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pagesexterne'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pagesexternes view content">
            <h3><?= h($pagesexterne->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pagesexterne->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idcategorie') ?></th>
                    <td><?= $this->Number->format($pagesexterne->idcategorie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($pagesexterne->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($pagesexterne->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pagesexterne->details)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Detailsfr') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pagesexterne->detailsfr)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>