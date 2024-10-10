<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dc $dc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dc'), ['action' => 'edit', $dc->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dc'), ['action' => 'delete', $dc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dc->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dc'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dc view content">
            <h3><?= h($dc->numdc) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numdc') ?></th>
                    <td><?= h($dc->numdc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numbp') ?></th>
                    <td><?= h($dc->numbp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Licence') ?></th>
                    <td><?= h($dc->licence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($dc->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tranche') ?></th>
                    <td><?= h($dc->tranche) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= h($dc->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($dc->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Liendc') ?></th>
                    <td><?= h($dc->liendc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numdckcc') ?></th>
                    <td><?= h($dc->numdckcc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numtransport') ?></th>
                    <td><?= h($dc->numtransport) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dc->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num') ?></th>
                    <td><?= $this->Number->format($dc->num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnage') ?></th>
                    <td><?= $this->Number->format($dc->tonnage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbitems') ?></th>
                    <td><?= $this->Number->format($dc->nbitems) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagerestant') ?></th>
                    <td><?= $this->Number->format($dc->tonnagerestant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnageutilise') ?></th>
                    <td><?= $this->Number->format($dc->tonnageutilise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbpaquets') ?></th>
                    <td><?= $this->Number->format($dc->nbpaquets) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seuil') ?></th>
                    <td><?= $this->Number->format($dc->seuil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($dc->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>