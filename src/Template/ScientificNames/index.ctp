<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Scientific Name'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scientificNames index large-9 medium-8 columns content">
    <h3><?= __('Scientific Names') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('kingdom') ?></th>
                <th><?= $this->Paginator->sort('phylum') ?></th>
                <th><?= $this->Paginator->sort('class') ?></th>
                <th><?= $this->Paginator->sort('order') ?></th>
                <th><?= $this->Paginator->sort('family') ?></th>
                <th><?= $this->Paginator->sort('genus') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scientificNames as $scientificName): ?>
            <tr>
                <td><?= $this->Number->format($scientificName->id) ?></td>
                <td><?= h($scientificName->kingdom) ?></td>
                <td><?= h($scientificName->phylum) ?></td>
                <td><?= h($scientificName->class) ?></td>
                <td><?= h($scientificName->order) ?></td>
                <td><?= h($scientificName->family) ?></td>
                <td><?= h($scientificName->genus) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $scientificName->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scientificName->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scientificName->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scientificName->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
