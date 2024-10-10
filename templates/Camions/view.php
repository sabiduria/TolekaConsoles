<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Camion $camion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Camion'), ['action' => 'edit', $camion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Camion'), ['action' => 'delete', $camion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $camion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Camions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Camion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="camions view content">
            <h3><?= h($camion->marque) ?></h3>
            <table>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= h($camion->marque) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($camion->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horse') ?></th>
                    <td><?= h($camion->horse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer1') ?></th>
                    <td><?= h($camion->trailer1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trailer2') ?></th>
                    <td><?= h($camion->trailer2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Couleur') ?></th>
                    <td><?= h($camion->couleur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($camion->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($camion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trans') ?></th>
                    <td><?= $this->Number->format($camion->trans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ch') ?></th>
                    <td><?= $this->Number->format($camion->ch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnage') ?></th>
                    <td><?= $this->Number->format($camion->tonnage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($camion->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($camion->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>