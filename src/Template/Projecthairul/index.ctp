<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projecthairul[]|\Cake\Collection\CollectionInterface $projecthairul
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projecthairul'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projecthairul index large-9 medium-8 columns content">
    <h3><?= __('Projecthairul') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projecthairul as $projecthairul): ?>
            <tr>
                <td><?= $this->Number->format($projecthairul->id) ?></td>
                <td><?= h($projecthairul->username) ?></td>
                <td><?= h($projecthairul->password) ?></td>
                <td><?= h($projecthairul->email) ?></td>
                <td><?= h($projecthairul->role) ?></td>
                <td><?= h($projecthairul->created) ?></td>
                <td><?= h($projecthairul->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projecthairul->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projecthairul->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projecthairul->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projecthairul->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
