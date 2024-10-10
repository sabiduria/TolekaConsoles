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
            <?= $this->Html->link(__('Edit Suggestion'), ['action' => 'edit', $suggestion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Suggestion'), ['action' => 'delete', $suggestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Suggestions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Suggestion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suggestions view content">
            <h3><?= h($suggestion->reponse) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reponse') ?></th>
                    <td><?= h($suggestion->reponse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($suggestion->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($suggestion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($suggestion->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser2') ?></th>
                    <td><?= $this->Number->format($suggestion->iduser2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($suggestion->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date2') ?></th>
                    <td><?= h($suggestion->date2) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Suggestion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($suggestion->suggestion)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>