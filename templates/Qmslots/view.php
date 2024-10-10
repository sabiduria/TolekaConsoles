<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qmslot $qmslot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Qmslot'), ['action' => 'edit', $qmslot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Qmslot'), ['action' => 'delete', $qmslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qmslot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Qmslots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Qmslot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="qmslots view content">
            <h3><?= h($qmslot->lotnumber) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lotnumber') ?></th>
                    <td><?= h($qmslot->lotnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($qmslot->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dleid') ?></th>
                    <td><?= h($qmslot->dleid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($qmslot->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>