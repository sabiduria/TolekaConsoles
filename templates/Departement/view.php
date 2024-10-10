<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departement $departement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Departement'), ['action' => 'edit', $departement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Departement'), ['action' => 'delete', $departement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Departement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="departement view content">
            <h3><?= h($departement->nomdpt) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomdpt') ?></th>
                    <td><?= h($departement->nomdpt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($departement->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($departement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($departement->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($departement->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>