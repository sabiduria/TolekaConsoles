<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loadingplan $loadingplan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Loadingplan'), ['action' => 'edit', $loadingplan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Loadingplan'), ['action' => 'delete', $loadingplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loadingplan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Loadingplan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Loadingplan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="loadingplan view content">
            <h3><?= h($loadingplan->produit) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($loadingplan->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($loadingplan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idprea') ?></th>
                    <td><?= $this->Number->format($loadingplan->idprea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagetoload') ?></th>
                    <td><?= $this->Number->format($loadingplan->tonnagetoload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($loadingplan->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exploaddate') ?></th>
                    <td><?= h($loadingplan->exploaddate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($loadingplan->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>