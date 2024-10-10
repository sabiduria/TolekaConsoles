<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Checkcocontent $checkcocontent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Checkcocontent'), ['action' => 'edit', $checkcocontent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Checkcocontent'), ['action' => 'delete', $checkcocontent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkcocontent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Checkcocontent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Checkcocontent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="checkcocontent view content">
            <h3><?= h($checkcocontent->imexlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($checkcocontent->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bagid') ?></th>
                    <td><?= h($checkcocontent->bagid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadperiod') ?></th>
                    <td><?= h($checkcocontent->loadperiod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($checkcocontent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poids') ?></th>
                    <td><?= $this->Number->format($checkcocontent->poids) ?></td>
                </tr>
                <tr>
                    <th><?= __('H2o') ?></th>
                    <td><?= $this->Number->format($checkcocontent->h2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co') ?></th>
                    <td><?= $this->Number->format($checkcocontent->co) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vpoids') ?></th>
                    <td><?= $this->Number->format($checkcocontent->vpoids) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vh2o') ?></th>
                    <td><?= $this->Number->format($checkcocontent->vh2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vco') ?></th>
                    <td><?= $this->Number->format($checkcocontent->vco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produith2o') ?></th>
                    <td><?= $this->Number->format($checkcocontent->produith2o) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produitco') ?></th>
                    <td><?= $this->Number->format($checkcocontent->produitco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($checkcocontent->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($checkcocontent->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>