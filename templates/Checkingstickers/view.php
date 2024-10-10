<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Checkingsticker $checkingsticker
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Checkingsticker'), ['action' => 'edit', $checkingsticker->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Checkingsticker'), ['action' => 'delete', $checkingsticker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkingsticker->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Checkingstickers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Checkingsticker'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="checkingstickers view content">
            <h3><?= h($checkingsticker->lotnumber) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lotnumber') ?></th>
                    <td><?= h($checkingsticker->lotnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($checkingsticker->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horse') ?></th>
                    <td><?= h($checkingsticker->horse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailers') ?></th>
                    <td><?= h($checkingsticker->trailers) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comment') ?></th>
                    <td><?= h($checkingsticker->comment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report') ?></th>
                    <td><?= h($checkingsticker->report) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inspecteur') ?></th>
                    <td><?= h($checkingsticker->inspecteur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moisgestion') ?></th>
                    <td><?= h($checkingsticker->moisgestion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($checkingsticker->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnageload') ?></th>
                    <td><?= $this->Number->format($checkingsticker->tonnageload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Items') ?></th>
                    <td><?= $this->Number->format($checkingsticker->items) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idtrip') ?></th>
                    <td><?= $this->Number->format($checkingsticker->idtrip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($checkingsticker->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($checkingsticker->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>