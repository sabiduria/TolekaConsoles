<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotdetail $lotdetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lotdetail'), ['action' => 'edit', $lotdetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lotdetail'), ['action' => 'delete', $lotdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotdetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lotdetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lotdetail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lotdetails view content">
            <h3><?= h($lotdetail->bagnumber) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bagnumber') ?></th>
                    <td><?= h($lotdetail->bagnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($lotdetail->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lotdetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lotid') ?></th>
                    <td><?= $this->Number->format($lotdetail->lotid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bagid') ?></th>
                    <td><?= $this->Number->format($lotdetail->bagid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poids') ?></th>
                    <td><?= $this->Number->format($lotdetail->poids) ?></td>
                </tr>
                <tr>
                    <th><?= __('H2o') ?></th>
                    <td><?= $this->Number->format($lotdetail->h2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co') ?></th>
                    <td><?= $this->Number->format($lotdetail->co) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fe') ?></th>
                    <td><?= $this->Number->format($lotdetail->fe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ca') ?></th>
                    <td><?= $this->Number->format($lotdetail->ca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mg') ?></th>
                    <td><?= $this->Number->format($lotdetail->mg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ni') ?></th>
                    <td><?= $this->Number->format($lotdetail->ni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mn') ?></th>
                    <td><?= $this->Number->format($lotdetail->mn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Si') ?></th>
                    <td><?= $this->Number->format($lotdetail->si) ?></td>
                </tr>
                <tr>
                    <th><?= __('Al') ?></th>
                    <td><?= $this->Number->format($lotdetail->al) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu') ?></th>
                    <td><?= $this->Number->format($lotdetail->cu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($lotdetail->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($lotdetail->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>