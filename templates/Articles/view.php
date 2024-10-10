<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="articles view content">
            <h3><?= h($article->designation) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($article->designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($article->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Utilite') ?></th>
                    <td><?= h($article->utilite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codemagasin') ?></th>
                    <td><?= h($article->codemagasin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coutmagasin') ?></th>
                    <td><?= h($article->coutmagasin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($article->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtestock') ?></th>
                    <td><?= $this->Number->format($article->qtestock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seuil') ?></th>
                    <td><?= $this->Number->format($article->seuil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($article->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($article->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>