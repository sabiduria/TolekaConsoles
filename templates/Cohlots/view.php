<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cohlot $cohlot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cohlot'), ['action' => 'edit', $cohlot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cohlot'), ['action' => 'delete', $cohlot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cohlot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cohlots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cohlot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cohlots view content">
            <h3><?= h($cohlot->numlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numlot') ?></th>
                    <td><?= h($cohlot->numlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numimex') ?></th>
                    <td><?= h($cohlot->numimex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Spec') ?></th>
                    <td><?= h($cohlot->spec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($cohlot->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paysdest') ?></th>
                    <td><?= h($cohlot->paysdest) ?></td>
                </tr>
                <tr>
                    <th><?= __('Corridor') ?></th>
                    <td><?= h($cohlot->corridor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horse') ?></th>
                    <td><?= h($cohlot->horse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer1') ?></th>
                    <td><?= h($cohlot->trailer1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer2') ?></th>
                    <td><?= h($cohlot->trailer2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transporteur') ?></th>
                    <td><?= h($cohlot->transporteur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moisgestion') ?></th>
                    <td><?= h($cohlot->moisgestion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($cohlot->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sealdgda') ?></th>
                    <td><?= h($cohlot->sealdgda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numbp') ?></th>
                    <td><?= h($cohlot->numbp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($cohlot->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Physicalgrade') ?></th>
                    <td><?= h($cohlot->physicalgrade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chemicalgrade') ?></th>
                    <td><?= h($cohlot->chemicalgrade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unite') ?></th>
                    <td><?= h($cohlot->unite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numdc') ?></th>
                    <td><?= h($cohlot->numdc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sealsecurite') ?></th>
                    <td><?= h($cohlot->sealsecurite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cohlot->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idtrip') ?></th>
                    <td><?= $this->Number->format($cohlot->idtrip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($cohlot->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnage') ?></th>
                    <td><?= $this->Number->format($cohlot->tonnage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnageload') ?></th>
                    <td><?= $this->Number->format($cohlot->tonnageload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($cohlot->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($cohlot->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Synced') ?></th>
                    <td><?= $cohlot->synced ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>