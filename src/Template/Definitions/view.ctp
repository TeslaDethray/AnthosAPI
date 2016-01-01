<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Definition'), ['action' => 'edit', $definition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Definition'), ['action' => 'delete', $definition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $definition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Definitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Definition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributions'), ['controller' => 'Attributions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribution'), ['controller' => 'Attributions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="definitions view large-9 medium-8 columns content">
    <h3><?= h($definition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($definition->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($definition->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($definition->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Definition') ?></h4>
        <?= $this->Text->autoParagraph(h($definition->definition)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subdefinition') ?></h4>
        <?= $this->Text->autoParagraph(h($definition->subdefinition)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Attributions') ?></h4>
        <?php if (!empty($definition->attributions)): ?>
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
            <?php foreach ($definition->attributions as $attributions): ?>
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
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($definition->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tag') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($definition->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->tag) ?></td>
                <td><?= h($tags->created_at) ?></td>
                <td><?= h($tags->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
