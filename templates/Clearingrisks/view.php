<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clearingrisk $clearingrisk
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Clearingrisk'), ['action' => 'edit', $clearingrisk->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clearingrisk'), ['action' => 'delete', $clearingrisk->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clearingrisk->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clearingrisks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clearingrisk'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="clearingrisks view content">
            <h3><?= h($clearingrisk->lotnumber) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lotnumber') ?></th>
                    <td><?= h($clearingrisk->lotnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($clearingrisk->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Riskop') ?></th>
                    <td><?= h($clearingrisk->riskop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentrisk') ?></th>
                    <td><?= h($clearingrisk->commentrisk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutrisk') ?></th>
                    <td><?= h($clearingrisk->statutrisk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($clearingrisk->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Riskdate') ?></th>
                    <td><?= h($clearingrisk->riskdate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>