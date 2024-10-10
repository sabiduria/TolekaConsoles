<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cubundle $cubundle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cubundle'), ['action' => 'edit', $cubundle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cubundle'), ['action' => 'delete', $cubundle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cubundle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cubundle'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cubundle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cubundle view content">
            <h3><?= h($cubundle->dateprod) ?></h3>
            <table>
                <tr>
                    <th><?= __('Dateprod') ?></th>
                    <td><?= h($cubundle->dateprod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unit') ?></th>
                    <td><?= h($cubundle->unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lotnumber') ?></th>
                    <td><?= h($cubundle->lotnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($cubundle->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bundlecode') ?></th>
                    <td><?= h($cubundle->bundlecode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Composite') ?></th>
                    <td><?= h($cubundle->composite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Visualgrade') ?></th>
                    <td><?= h($cubundle->visualgrade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chemicalgrade') ?></th>
                    <td><?= h($cubundle->chemicalgrade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finalgrade') ?></th>
                    <td><?= h($cubundle->finalgrade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($cubundle->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charge') ?></th>
                    <td><?= h($cubundle->charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seal1') ?></th>
                    <td><?= h($cubundle->seal1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seal2') ?></th>
                    <td><?= h($cubundle->seal2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cubundle->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grossweight') ?></th>
                    <td><?= $this->Number->format($cubundle->grossweight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Netweight') ?></th>
                    <td><?= $this->Number->format($cubundle->netweight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($cubundle->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateloaded') ?></th>
                    <td><?= h($cubundle->dateloaded) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($cubundle->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateadded') ?></th>
                    <td><?= h($cubundle->dateadded) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datechecked') ?></th>
                    <td><?= h($cubundle->datechecked) ?></td>
                </tr>
                <tr>
                    <th><?= __('Synced') ?></th>
                    <td><?= $cubundle->synced ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Admin Sync') ?></h4>
                <?php if (!empty($cubundle->admin_sync)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cohbags Id') ?></th>
                            <th><?= __('Cohlots Id') ?></th>
                            <th><?= __('Cubundle Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cubundle->admin_sync as $adminSync) : ?>
                        <tr>
                            <td><?= h($adminSync->id) ?></td>
                            <td><?= h($adminSync->cohbags_id) ?></td>
                            <td><?= h($adminSync->cohlots_id) ?></td>
                            <td><?= h($adminSync->cubundle_id) ?></td>
                            <td><?= h($adminSync->created) ?></td>
                            <td><?= h($adminSync->modified) ?></td>
                            <td><?= h($adminSync->createdby) ?></td>
                            <td><?= h($adminSync->modifiedby) ?></td>
                            <td><?= h($adminSync->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AdminSync', 'action' => 'view', $adminSync->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AdminSync', 'action' => 'edit', $adminSync->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AdminSync', 'action' => 'delete', $adminSync->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminSync->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Device Sync') ?></h4>
                <?php if (!empty($cubundle->device_sync)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Imei') ?></th>
                            <th><?= __('Cohbags Id') ?></th>
                            <th><?= __('Cohlots Id') ?></th>
                            <th><?= __('Cubundle Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cubundle->device_sync as $deviceSync) : ?>
                        <tr>
                            <td><?= h($deviceSync->id) ?></td>
                            <td><?= h($deviceSync->name) ?></td>
                            <td><?= h($deviceSync->imei) ?></td>
                            <td><?= h($deviceSync->cohbags_id) ?></td>
                            <td><?= h($deviceSync->cohlots_id) ?></td>
                            <td><?= h($deviceSync->cubundle_id) ?></td>
                            <td><?= h($deviceSync->created) ?></td>
                            <td><?= h($deviceSync->modified) ?></td>
                            <td><?= h($deviceSync->createdby) ?></td>
                            <td><?= h($deviceSync->modifiedby) ?></td>
                            <td><?= h($deviceSync->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'DeviceSync', 'action' => 'view', $deviceSync->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'DeviceSync', 'action' => 'edit', $deviceSync->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DeviceSync', 'action' => 'delete', $deviceSync->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceSync->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>