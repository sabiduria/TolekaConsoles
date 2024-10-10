<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reconditionnement $reconditionnement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reconditionnement'), ['action' => 'edit', $reconditionnement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reconditionnement'), ['action' => 'delete', $reconditionnement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reconditionnement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reconditionnement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reconditionnement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reconditionnement view content">
            <h3><?= h($reconditionnement->bagid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bagid') ?></th>
                    <td><?= h($reconditionnement->bagid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zone') ?></th>
                    <td><?= h($reconditionnement->zone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($reconditionnement->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($reconditionnement->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($reconditionnement->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reconditionnement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($reconditionnement->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser2') ?></th>
                    <td><?= $this->Number->format($reconditionnement->iduser2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateid') ?></th>
                    <td><?= h($reconditionnement->dateid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateok') ?></th>
                    <td><?= h($reconditionnement->dateok) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>