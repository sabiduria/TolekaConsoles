<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Formation $formation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Formation'), ['action' => 'edit', $formation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Formation'), ['action' => 'delete', $formation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Formations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Formation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="formations view content">
            <h3><?= h($formation->nomformation) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomformation') ?></th>
                    <td><?= h($formation->nomformation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periode') ?></th>
                    <td><?= h($formation->periode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etablissement') ?></th>
                    <td><?= h($formation->etablissement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lieu') ?></th>
                    <td><?= h($formation->lieu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pieceobtenue') ?></th>
                    <td><?= h($formation->pieceobtenue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nompiece') ?></th>
                    <td><?= h($formation->nompiece) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($formation->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($formation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($formation->iduser) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>