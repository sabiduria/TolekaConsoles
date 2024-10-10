<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Destination $destination
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Destination'), ['action' => 'edit', $destination->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Destination'), ['action' => 'delete', $destination->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destination->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Destinations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Destination'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinations view content">
            <h3><?= h($destination->pays) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pays') ?></th>
                    <td><?= h($destination->pays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($destination->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Corridor') ?></th>
                    <td><?= h($destination->corridor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codeprea') ?></th>
                    <td><?= h($destination->codeprea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($destination->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($destination->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($destination->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagerequis') ?></th>
                    <td><?= $this->Number->format($destination->tonnagerequis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnageenvoye') ?></th>
                    <td><?= $this->Number->format($destination->tonnageenvoye) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagerestant') ?></th>
                    <td><?= $this->Number->format($destination->tonnagerestant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($destination->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($destination->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Consignee') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($destination->consignee)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>