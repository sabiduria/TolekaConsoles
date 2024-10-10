<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Parametresapp> $parametresapp
 */
?>
<div class="parametresapp index content">
    <?= $this->Html->link(__('New Parametresapp'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Parametresapp') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomapp') ?></th>
                    <th><?= $this->Paginator->sort('slogan') ?></th>
                    <th><?= $this->Paginator->sort('logo') ?></th>
                    <th><?= $this->Paginator->sort('emailapp') ?></th>
                    <th><?= $this->Paginator->sort('telapp') ?></th>
                    <th><?= $this->Paginator->sort('nomresp') ?></th>
                    <th><?= $this->Paginator->sort('telresp') ?></th>
                    <th><?= $this->Paginator->sort('emailresp') ?></th>
                    <th><?= $this->Paginator->sort('domaine') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th><?= $this->Paginator->sort('rccm') ?></th>
                    <th><?= $this->Paginator->sort('idnat') ?></th>
                    <th><?= $this->Paginator->sort('numimpot') ?></th>
                    <th><?= $this->Paginator->sort('numtva') ?></th>
                    <th><?= $this->Paginator->sort('nomcompagnie') ?></th>
                    <th><?= $this->Paginator->sort('declaration') ?></th>
                    <th><?= $this->Paginator->sort('prixdocuments') ?></th>
                    <th><?= $this->Paginator->sort('banque') ?></th>
                    <th><?= $this->Paginator->sort('numcomptebanqueusd') ?></th>
                    <th><?= $this->Paginator->sort('numcomptebanquecdf') ?></th>
                    <th><?= $this->Paginator->sort('numcompte_airtelmonney') ?></th>
                    <th><?= $this->Paginator->sort('numcompte_mpesa') ?></th>
                    <th><?= $this->Paginator->sort('numcompte_orangemonney') ?></th>
                    <th><?= $this->Paginator->sort('version') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($parametresapp as $parametresapp): ?>
                <tr>
                    <td><?= $this->Number->format($parametresapp->id) ?></td>
                    <td><?= h($parametresapp->nomapp) ?></td>
                    <td><?= h($parametresapp->slogan) ?></td>
                    <td><?= h($parametresapp->logo) ?></td>
                    <td><?= h($parametresapp->emailapp) ?></td>
                    <td><?= h($parametresapp->telapp) ?></td>
                    <td><?= h($parametresapp->nomresp) ?></td>
                    <td><?= h($parametresapp->telresp) ?></td>
                    <td><?= h($parametresapp->emailresp) ?></td>
                    <td><?= h($parametresapp->domaine) ?></td>
                    <td><?= h($parametresapp->code) ?></td>
                    <td><?= $this->Number->format($parametresapp->iduser) ?></td>
                    <td><?= h($parametresapp->datemiseajour) ?></td>
                    <td><?= h($parametresapp->rccm) ?></td>
                    <td><?= h($parametresapp->idnat) ?></td>
                    <td><?= h($parametresapp->numimpot) ?></td>
                    <td><?= h($parametresapp->numtva) ?></td>
                    <td><?= h($parametresapp->nomcompagnie) ?></td>
                    <td><?= $this->Number->format($parametresapp->declaration) ?></td>
                    <td><?= $this->Number->format($parametresapp->prixdocuments) ?></td>
                    <td><?= h($parametresapp->banque) ?></td>
                    <td><?= h($parametresapp->numcomptebanqueusd) ?></td>
                    <td><?= h($parametresapp->numcomptebanquecdf) ?></td>
                    <td><?= h($parametresapp->numcompte_airtelmonney) ?></td>
                    <td><?= h($parametresapp->numcompte_mpesa) ?></td>
                    <td><?= h($parametresapp->numcompte_orangemonney) ?></td>
                    <td><?= h($parametresapp->version) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $parametresapp->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parametresapp->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parametresapp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametresapp->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>