<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detailsbp $detailsbp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detailsbp'), ['action' => 'edit', $detailsbp->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detailsbp'), ['action' => 'delete', $detailsbp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailsbp->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detailsbp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detailsbp'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detailsbp view content">
            <h3><?= h($detailsbp->numbp) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numbp') ?></th>
                    <td><?= h($detailsbp->numbp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numlot') ?></th>
                    <td><?= h($detailsbp->numlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horse') ?></th>
                    <td><?= h($detailsbp->horse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer1') ?></th>
                    <td><?= h($detailsbp->trailer1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer2') ?></th>
                    <td><?= h($detailsbp->trailer2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transporteur') ?></th>
                    <td><?= h($detailsbp->transporteur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chauffeur') ?></th>
                    <td><?= h($detailsbp->chauffeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passeport') ?></th>
                    <td><?= h($detailsbp->passeport) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nationalite') ?></th>
                    <td><?= h($detailsbp->nationalite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sealdgda') ?></th>
                    <td><?= h($detailsbp->sealdgda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detailsbp->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idbp') ?></th>
                    <td><?= $this->Number->format($detailsbp->idbp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbpaquets') ?></th>
                    <td><?= $this->Number->format($detailsbp->nbpaquets) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poidsnet') ?></th>
                    <td><?= $this->Number->format($detailsbp->poidsnet) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poidsbrut') ?></th>
                    <td><?= $this->Number->format($detailsbp->poidsbrut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($detailsbp->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($detailsbp->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>