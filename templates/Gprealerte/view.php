<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gprealerte $gprealerte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gprealerte'), ['action' => 'edit', $gprealerte->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gprealerte'), ['action' => 'delete', $gprealerte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gprealerte->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gprealerte'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gprealerte'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="gprealerte view content">
            <h3><?= h($gprealerte->transporteur) ?></h3>
            <table>
                <tr>
                    <th><?= __('Transporteur') ?></th>
                    <td><?= h($gprealerte->transporteur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horse') ?></th>
                    <td><?= h($gprealerte->horse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer1') ?></th>
                    <td><?= h($gprealerte->trailer1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer2') ?></th>
                    <td><?= h($gprealerte->trailer2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($gprealerte->prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($gprealerte->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passeport') ?></th>
                    <td><?= h($gprealerte->passeport) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($gprealerte->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($gprealerte->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pays') ?></th>
                    <td><?= h($gprealerte->pays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($gprealerte->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Corridor') ?></th>
                    <td><?= h($gprealerte->corridor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($gprealerte->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typetrans') ?></th>
                    <td><?= h($gprealerte->typetrans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($gprealerte->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exitpoint') ?></th>
                    <td><?= h($gprealerte->exitpoint) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gprealerte->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnage') ?></th>
                    <td><?= $this->Number->format($gprealerte->tonnage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($gprealerte->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Eta') ?></th>
                    <td><?= h($gprealerte->eta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datearrivee') ?></th>
                    <td><?= h($gprealerte->datearrivee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateexpvisa') ?></th>
                    <td><?= h($gprealerte->dateexpvisa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateexppass') ?></th>
                    <td><?= h($gprealerte->dateexppass) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($gprealerte->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadingdate') ?></th>
                    <td><?= h($gprealerte->loadingdate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>