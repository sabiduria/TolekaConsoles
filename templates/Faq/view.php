<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Faq'), ['action' => 'edit', $faq->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Faq'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Faq'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Faq'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="faq view content">
            <h3><?= h($faq->question) ?></h3>
            <table>
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= h($faq->question) ?></td>
                </tr>
                <tr>
                    <th><?= __('Questionfr') ?></th>
                    <td><?= h($faq->questionfr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($faq->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($faq->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($faq->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idagent') ?></th>
                    <td><?= $this->Number->format($faq->idagent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($faq->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($faq->datemiseajour) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reponse') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->reponse)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Reponsefr') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->reponsefr)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>