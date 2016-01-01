<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Source'), ['action' => 'edit', $source->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Source'), ['action' => 'delete', $source->id], ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributions'), ['controller' => 'Attributions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribution'), ['controller' => 'Attributions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sources view large-9 medium-8 columns content">
    <h3><?= h($source->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($source->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($source->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($source->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($source->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Attributions') ?></h4>
        <?php if (!empty($source->attributions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Plant Id') ?></th>
                <th><?= __('Definition Id') ?></th>
                <th><?= __('Source Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($source->attributions as $attributions): ?>
            <tr>
                <td><?= h($attributions->id) ?></td>
                <td><?= h($attributions->plant_id) ?></td>
                <td><?= h($attributions->definition_id) ?></td>
                <td><?= h($attributions->source_id) ?></td>
                <td><?= h($attributions->created_at) ?></td>
                <td><?= h($attributions->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attributions', 'action' => 'view', $attributions->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attributions', 'action' => 'edit', $attributions->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attributions', 'action' => 'delete', $attributions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
