<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ImagesSafetytopic $imagesSafetytopic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Images Safetytopic'), ['action' => 'edit', $imagesSafetytopic->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Images Safetytopic'), ['action' => 'delete', $imagesSafetytopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagesSafetytopic->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Images Safetytopic'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Images Safetytopic'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="imagesSafetytopic view content">
            <h3><?= h($imagesSafetytopic->image) ?></h3>
            <table>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($imagesSafetytopic->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($imagesSafetytopic->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idtopic') ?></th>
                    <td><?= $this->Number->format($imagesSafetytopic->idtopic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($imagesSafetytopic->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($imagesSafetytopic->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>