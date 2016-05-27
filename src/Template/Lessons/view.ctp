<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lesson'), ['action' => 'edit', $lesson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lesson'), ['action' => 'delete', $lesson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lesson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lessons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lesson'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lessons view large-9 medium-8 columns content">
    <h3><?= h($lesson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $lesson->has('user') ? $this->Html->link($lesson->user->name, ['controller' => 'Users', 'action' => 'view', $lesson->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $lesson->has('category') ? $this->Html->link($lesson->category->name, ['controller' => 'Categories', 'action' => 'view', $lesson->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($lesson->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($lesson->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($lesson->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Results') ?></h4>
        <?php if (!empty($lesson->results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Lesson Id') ?></th>
                <th><?= __('Word Id') ?></th>
                <th><?= __('Answer Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lesson->results as $results): ?>
            <tr>
                <td><?= h($results->id) ?></td>
                <td><?= h($results->lesson_id) ?></td>
                <td><?= h($results->word_id) ?></td>
                <td><?= h($results->answer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Results', 'action' => 'view', $results->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Results', 'action' => 'edit', $results->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Results', 'action' => 'delete', $results->id], ['confirm' => __('Are you sure you want to delete # {0}?', $results->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
