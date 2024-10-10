<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nationalite $nationalite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Nationalite'), ['action' => 'edit', $nationalite->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Nationalite'), ['action' => 'delete', $nationalite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nationalite->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Nationalite'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Nationalite'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="nationalite view content">
            <h3><?= h($nationalite->nationalite) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nationalite') ?></th>
                    <td><?= h($nationalite->nationalite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Langue') ?></th>
                    <td><?= h($nationalite->langue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($nationalite->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($nationalite->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($nationalite->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($nationalite->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>