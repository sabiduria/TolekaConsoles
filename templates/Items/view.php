<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="items view content">
            <h3><?= h($item->itemname) ?></h3>
            <table>
                <tr>
                    <th><?= __('Itemname') ?></th>
                    <td><?= h($item->itemname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nature') ?></th>
                    <td><?= h($item->nature) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idshop') ?></th>
                    <td><?= h($item->idshop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shelf') ?></th>
                    <td><?= h($item->shelf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($item->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($item->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($item->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbreitems') ?></th>
                    <td><?= $this->Number->format($item->nbreitems) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length') ?></th>
                    <td><?= $this->Number->format($item->length) ?></td>
                </tr>
                <tr>
                    <th><?= __('Width') ?></th>
                    <td><?= $this->Number->format($item->width) ?></td>
                </tr>
                <tr>
                    <th><?= __('Height') ?></th>
                    <td><?= $this->Number->format($item->height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cbm') ?></th>
                    <td><?= $this->Number->format($item->cbm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Averageweightperpackage') ?></th>
                    <td><?= $this->Number->format($item->averageweightperpackage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Packagetotalweight') ?></th>
                    <td><?= $this->Number->format($item->packagetotalweight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Netweightperpackage') ?></th>
                    <td><?= $this->Number->format($item->netweightperpackage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Itemnetweight') ?></th>
                    <td><?= $this->Number->format($item->itemnetweight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idstore') ?></th>
                    <td><?= $this->Number->format($item->idstore) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idcl') ?></th>
                    <td><?= $this->Number->format($item->idcl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ray') ?></th>
                    <td><?= $this->Number->format($item->ray) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($item->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser2') ?></th>
                    <td><?= $this->Number->format($item->iduser2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datereceipt') ?></th>
                    <td><?= h($item->datereceipt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Daterecord') ?></th>
                    <td><?= h($item->daterecord) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($item->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Miseajour') ?></th>
                    <td><?= h($item->miseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>