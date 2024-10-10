<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentsadministratif $documentsadministratif
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Documentsadministratif'), ['action' => 'edit', $documentsadministratif->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Documentsadministratif'), ['action' => 'delete', $documentsadministratif->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentsadministratif->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Documentsadministratif'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Documentsadministratif'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="documentsadministratif view content">
            <h3><?= h($documentsadministratif->matricule) ?></h3>
            <table>
                <tr>
                    <th><?= __('Matricule') ?></th>
                    <td><?= h($documentsadministratif->matricule) ?></td>
                </tr>
                <tr>
                    <th><?= __('Document') ?></th>
                    <td><?= h($documentsadministratif->document) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($documentsadministratif->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categorie') ?></th>
                    <td><?= h($documentsadministratif->categorie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentaire') ?></th>
                    <td><?= h($documentsadministratif->commentaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($documentsadministratif->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idemp') ?></th>
                    <td><?= $this->Number->format($documentsadministratif->idemp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($documentsadministratif->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($documentsadministratif->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>