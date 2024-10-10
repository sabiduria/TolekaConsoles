<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Safetytopic $safetytopic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Safetytopic'), ['action' => 'edit', $safetytopic->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Safetytopic'), ['action' => 'delete', $safetytopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $safetytopic->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Safetytopic'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Safetytopic'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="safetytopic view content">
            <h3><?= h($safetytopic->sujet) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sujet') ?></th>
                    <td><?= h($safetytopic->sujet) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lieu') ?></th>
                    <td><?= h($safetytopic->lieu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($safetytopic->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($safetytopic->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datetopic') ?></th>
                    <td><?= h($safetytopic->datetopic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($safetytopic->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Commentaires') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($safetytopic->commentaires)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>