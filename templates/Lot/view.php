<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lot $lot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lot'), ['action' => 'edit', $lot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lot'), ['action' => 'delete', $lot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lot'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lot view content">
            <h3><?= h($lot->numlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numlot') ?></th>
                    <td><?= h($lot->numlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($lot->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($lot->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lot->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbbags') ?></th>
                    <td><?= $this->Number->format($lot->nbbags) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnage') ?></th>
                    <td><?= $this->Number->format($lot->tonnage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($lot->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($lot->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>