<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ci $ci
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ci'), ['action' => 'edit', $ci->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ci'), ['action' => 'delete', $ci->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ci->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ci'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ci'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ci view content">
            <h3><?= h($ci->lotnumber) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lotnumber') ?></th>
                    <td><?= h($ci->lotnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numimex') ?></th>
                    <td><?= h($ci->numimex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horse') ?></th>
                    <td><?= h($ci->horse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transporter') ?></th>
                    <td><?= h($ci->transporter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($ci->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ci->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($ci->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($ci->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>