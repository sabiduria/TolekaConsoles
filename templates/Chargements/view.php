<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chargement $chargement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chargement'), ['action' => 'edit', $chargement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chargement'), ['action' => 'delete', $chargement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chargement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chargements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chargement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="chargements view content">
            <h3><?= h($chargement->numlot) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numlot') ?></th>
                    <td><?= h($chargement->numlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadassistant') ?></th>
                    <td><?= h($chargement->loadassistant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadhelper1') ?></th>
                    <td><?= h($chargement->loadhelper1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadhelper2') ?></th>
                    <td><?= h($chargement->loadhelper2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operateur1') ?></th>
                    <td><?= h($chargement->operateur1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operateur2') ?></th>
                    <td><?= h($chargement->operateur2) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= h($chargement->user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chargement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($chargement->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>