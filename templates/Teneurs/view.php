<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teneur $teneur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Teneur'), ['action' => 'edit', $teneur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Teneur'), ['action' => 'delete', $teneur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teneur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Teneurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Teneur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="teneurs view content">
            <h3><?= h($teneur->produit) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($teneur->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teneur') ?></th>
                    <td><?= h($teneur->teneur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($teneur->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($teneur->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($teneur->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($teneur->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>