<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactionswb $transactionswb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transactionswb'), ['action' => 'edit', $transactionswb->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transactionswb'), ['action' => 'delete', $transactionswb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionswb->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transactionswb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transactionswb'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transactionswb view content">
            <h3><?= h($transactionswb->wbop) ?></h3>
            <table>
                <tr>
                    <th><?= __('Wbop') ?></th>
                    <td><?= h($transactionswb->wbop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typetrans') ?></th>
                    <td><?= h($transactionswb->typetrans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Decision') ?></th>
                    <td><?= h($transactionswb->decision) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wbticket') ?></th>
                    <td><?= h($transactionswb->wbticket) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lienwbticket') ?></th>
                    <td><?= h($transactionswb->lienwbticket) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transactionswb->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idtrip') ?></th>
                    <td><?= $this->Number->format($transactionswb->idtrip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tare') ?></th>
                    <td><?= $this->Number->format($transactionswb->tare) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poidsbrut') ?></th>
                    <td><?= $this->Number->format($transactionswb->poidsbrut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poidsnet') ?></th>
                    <td><?= $this->Number->format($transactionswb->poidsnet) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbitems') ?></th>
                    <td><?= $this->Number->format($transactionswb->nbitems) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbpass') ?></th>
                    <td><?= $this->Number->format($transactionswb->nbpass) ?></td>
                </tr>
                <tr>
                    <th><?= __('Variance') ?></th>
                    <td><?= $this->Number->format($transactionswb->variance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Purvar') ?></th>
                    <td><?= $this->Number->format($transactionswb->purvar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($transactionswb->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>