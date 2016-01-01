<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scientific Name'), ['action' => 'edit', $scientificName->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Scientific Name'), ['action' => 'delete', $scientificName->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scientificName->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scientific Names'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scientific Name'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scientificNames view large-9 medium-8 columns content">
    <h3><?= h($scientificName->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Kingdom') ?></th>
            <td><?= h($scientificName->kingdom) ?></td>
        </tr>
        <tr>
            <th><?= __('Phylum') ?></th>
            <td><?= h($scientificName->phylum) ?></td>
        </tr>
        <tr>
            <th><?= __('Class') ?></th>
            <td><?= h($scientificName->class) ?></td>
        </tr>
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= h($scientificName->order) ?></td>
        </tr>
        <tr>
            <th><?= __('Family') ?></th>
            <td><?= h($scientificName->family) ?></td>
        </tr>
        <tr>
            <th><?= __('Genus') ?></th>
            <td><?= h($scientificName->genus) ?></td>
        </tr>
        <tr>
            <th><?= __('Species') ?></th>
            <td><?= h($scientificName->species) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($scientificName->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($scientificName->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($scientificName->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Plants') ?></h4>
        <?php if (!empty($scientificName->plants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Common Name') ?></th>
                <th><?= __('Color') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Variety') ?></th>
                <th><?= __('Seasonality') ?></th>
                <th><?= __('Vase Life') ?></th>
                <th><?= __('Difficulty') ?></th>
                <th><?= __('Notes') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Scientific Name Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($scientificName->plants as $plants): ?>
            <tr>
                <td><?= h($plants->id) ?></td>
                <td><?= h($plants->common_name) ?></td>
                <td><?= h($plants->color) ?></td>
                <td><?= h($plants->type) ?></td>
                <td><?= h($plants->variety) ?></td>
                <td><?= h($plants->seasonality) ?></td>
                <td><?= h($plants->vase_life) ?></td>
                <td><?= h($plants->difficulty) ?></td>
                <td><?= h($plants->notes) ?></td>
                <td><?= h($plants->created_at) ?></td>
                <td><?= h($plants->updated_at) ?></td>
                <td><?= h($plants->scientific_name_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Plants', 'action' => 'view', $plants->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Plants', 'action' => 'edit', $plants->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Plants', 'action' => 'delete', $plants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plants->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
