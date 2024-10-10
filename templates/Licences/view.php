<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Licence $licence
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Licence'), ['action' => 'edit', $licence->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Licence'), ['action' => 'delete', $licence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licence->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Licences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Licence'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="licences view content">
            <h3><?= h($licence->codelic) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codelic') ?></th>
                    <td><?= h($licence->codelic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agence') ?></th>
                    <td><?= h($licence->agence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($licence->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($licence->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeproduit') ?></th>
                    <td><?= h($licence->typeproduit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trancheteneur') ?></th>
                    <td><?= h($licence->trancheteneur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagerestant') ?></th>
                    <td><?= h($licence->tonnagerestant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seuil') ?></th>
                    <td><?= h($licence->seuil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frontiere') ?></th>
                    <td><?= h($licence->frontiere) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($licence->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moyentrans') ?></th>
                    <td><?= h($licence->moyentrans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($licence->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnage') ?></th>
                    <td><?= $this->Number->format($licence->tonnage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validite') ?></th>
                    <td><?= $this->Number->format($licence->validite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($licence->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periode') ?></th>
                    <td><?= h($licence->periode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiration') ?></th>
                    <td><?= h($licence->expiration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($licence->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>