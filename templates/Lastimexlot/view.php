<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lastimexlot $lastimexlot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lastimexlot'), ['action' => 'edit', $lastimexlot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lastimexlot'), ['action' => 'delete', $lastimexlot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lastimexlot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lastimexlot'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lastimexlot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lastimexlot view content">
            <h3><?= h($lastimexlot->produit) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($lastimexlot->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unit') ?></th>
                    <td><?= h($lastimexlot->unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastimexlot') ?></th>
                    <td><?= h($lastimexlot->lastimexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lastimexlot->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Newlastnum') ?></th>
                    <td><?= $this->Number->format($lastimexlot->newlastnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Used') ?></th>
                    <td><?= $this->Number->format($lastimexlot->used) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>