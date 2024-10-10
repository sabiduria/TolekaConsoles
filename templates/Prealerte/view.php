<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prealerte $prealerte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prealerte'), ['action' => 'edit', $prealerte->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prealerte'), ['action' => 'delete', $prealerte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prealerte->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prealerte'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prealerte'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prealerte view content">
            <h3><?= h($prealerte->produit) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($prealerte->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($prealerte->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($prealerte->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentaire') ?></th>
                    <td><?= h($prealerte->commentaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moisgestion') ?></th>
                    <td><?= h($prealerte->moisgestion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadingplan') ?></th>
                    <td><?= h($prealerte->loadingplan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destinationg') ?></th>
                    <td><?= h($prealerte->destinationg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exitpoint') ?></th>
                    <td><?= h($prealerte->exitpoint) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($prealerte->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Camion') ?></th>
                    <td><?= $this->Number->format($prealerte->camion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= $this->Number->format($prealerte->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($prealerte->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Eta') ?></th>
                    <td><?= h($prealerte->eta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datearrivee') ?></th>
                    <td><?= h($prealerte->datearrivee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($prealerte->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>