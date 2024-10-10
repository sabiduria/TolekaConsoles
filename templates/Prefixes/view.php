<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prefix $prefix
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prefix'), ['action' => 'edit', $prefix->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prefix'), ['action' => 'delete', $prefix->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prefix->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prefixes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prefix'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prefixes view content">
            <h3><?= h($prefix->prefixe) ?></h3>
            <table>
                <tr>
                    <th><?= __('Prefixe') ?></th>
                    <td><?= h($prefix->prefixe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($prefix->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($prefix->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($prefix->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($prefix->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($prefix->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>