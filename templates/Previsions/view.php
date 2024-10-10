<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prevision $prevision
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prevision'), ['action' => 'edit', $prevision->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prevision'), ['action' => 'delete', $prevision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prevision->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Previsions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prevision'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="previsions view content">
            <h3><?= h($prevision->mois) ?></h3>
            <table>
                <tr>
                    <th><?= __('Mois') ?></th>
                    <td><?= h($prevision->mois) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($prevision->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($prevision->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagemens') ?></th>
                    <td><?= $this->Number->format($prevision->tonnagemens) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagejour') ?></th>
                    <td><?= $this->Number->format($prevision->tonnagejour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Camionsmens') ?></th>
                    <td><?= $this->Number->format($prevision->camionsmens) ?></td>
                </tr>
                <tr>
                    <th><?= __('Camionsjour') ?></th>
                    <td><?= $this->Number->format($prevision->camionsjour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>