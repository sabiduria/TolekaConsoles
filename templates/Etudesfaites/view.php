<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudesfaite $etudesfaite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Etudesfaite'), ['action' => 'edit', $etudesfaite->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Etudesfaite'), ['action' => 'delete', $etudesfaite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudesfaite->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Etudesfaites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Etudesfaite'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="etudesfaites view content">
            <h3><?= h($etudesfaite->periode) ?></h3>
            <table>
                <tr>
                    <th><?= __('Periode') ?></th>
                    <td><?= h($etudesfaite->periode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ecole') ?></th>
                    <td><?= h($etudesfaite->ecole) ?></td>
                </tr>
                <tr>
                    <th><?= __('Classes') ?></th>
                    <td><?= h($etudesfaite->classes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= h($etudesfaite->ville) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pieceobtenue') ?></th>
                    <td><?= h($etudesfaite->pieceobtenue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateenregistrement') ?></th>
                    <td><?= h($etudesfaite->dateenregistrement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($etudesfaite->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($etudesfaite->iduser) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>