<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detailslot $detailslot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detailslot'), ['action' => 'edit', $detailslot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detailslot'), ['action' => 'delete', $detailslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailslot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detailslot'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detailslot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detailslot view content">
            <h3><?= h($detailslot->numlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numlot') ?></th>
                    <td><?= h($detailslot->numlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bagid') ?></th>
                    <td><?= h($detailslot->bagid) ?></td>
                </tr>
                <tr>
                    <th><?= __('H20') ?></th>
                    <td><?= h($detailslot->h20) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co') ?></th>
                    <td><?= h($detailslot->co) ?></td>
                </tr>
                <tr>
                    <th><?= __('U') ?></th>
                    <td><?= h($detailslot->u) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mg') ?></th>
                    <td><?= h($detailslot->mg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mn') ?></th>
                    <td><?= h($detailslot->mn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ni') ?></th>
                    <td><?= h($detailslot->ni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fe') ?></th>
                    <td><?= h($detailslot->fe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ca') ?></th>
                    <td><?= h($detailslot->ca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Si') ?></th>
                    <td><?= h($detailslot->si) ?></td>
                </tr>
                <tr>
                    <th><?= __('Al') ?></th>
                    <td><?= h($detailslot->al) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu') ?></th>
                    <td><?= h($detailslot->cu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cocont') ?></th>
                    <td><?= h($detailslot->cocont) ?></td>
                </tr>
                <tr>
                    <th><?= __('Spec') ?></th>
                    <td><?= h($detailslot->spec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateprod') ?></th>
                    <td><?= h($detailslot->dateprod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poids') ?></th>
                    <td><?= h($detailslot->poids) ?></td>
                </tr>
                <tr>
                    <th><?= __('Composite') ?></th>
                    <td><?= h($detailslot->composite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zn') ?></th>
                    <td><?= h($detailslot->zn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detailslot->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idbag') ?></th>
                    <td><?= $this->Number->format($detailslot->idbag) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $this->Number->format($detailslot->user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datecrea') ?></th>
                    <td><?= h($detailslot->datecrea) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>