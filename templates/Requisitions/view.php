<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Requisition'), ['action' => 'edit', $requisition->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Requisition'), ['action' => 'delete', $requisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Requisitions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Requisition'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="requisitions view content">
            <h3><?= h($requisition->item) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= h($requisition->item) ?></td>
                </tr>
                <tr>
                    <th><?= __('Motif') ?></th>
                    <td><?= h($requisition->motif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutac') ?></th>
                    <td><?= h($requisition->statutac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentliv') ?></th>
                    <td><?= h($requisition->commentliv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentac') ?></th>
                    <td><?= h($requisition->commentac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($requisition->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($requisition->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($requisition->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtedem') ?></th>
                    <td><?= $this->Number->format($requisition->qtedem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qteac') ?></th>
                    <td><?= $this->Number->format($requisition->qteac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idac') ?></th>
                    <td><?= $this->Number->format($requisition->idac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qteliv') ?></th>
                    <td><?= $this->Number->format($requisition->qteliv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idliv') ?></th>
                    <td><?= $this->Number->format($requisition->idliv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($requisition->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateac') ?></th>
                    <td><?= h($requisition->dateac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateliv') ?></th>
                    <td><?= h($requisition->dateliv) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>