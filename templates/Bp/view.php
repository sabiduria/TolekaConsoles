<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bp $bp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bp'), ['action' => 'edit', $bp->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bp'), ['action' => 'delete', $bp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bp->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bp'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bp view content">
            <h3><?= h($bp->numbp) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numbp') ?></th>
                    <td><?= h($bp->numbp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Licence') ?></th>
                    <td><?= h($bp->licence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeproduit') ?></th>
                    <td><?= h($bp->typeproduit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($bp->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tranche') ?></th>
                    <td><?= h($bp->tranche) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($bp->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agence') ?></th>
                    <td><?= h($bp->agence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moyentransport') ?></th>
                    <td><?= h($bp->moyentransport) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numautorisation') ?></th>
                    <td><?= h($bp->numautorisation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etablipar') ?></th>
                    <td><?= h($bp->etablipar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiepar') ?></th>
                    <td><?= h($bp->modifiepar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Approuvepar') ?></th>
                    <td><?= h($bp->approuvepar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numdc') ?></th>
                    <td><?= h($bp->numdc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($bp->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bp->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num') ?></th>
                    <td><?= $this->Number->format($bp->num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($bp->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemodification') ?></th>
                    <td><?= h($bp->datemodification) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateapprobation') ?></th>
                    <td><?= h($bp->dateapprobation) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>