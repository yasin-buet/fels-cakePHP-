<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lessons'), ['controller' => 'Lessons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lesson'), ['controller' => 'Lessons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="results index large-9 medium-8 columns content">
    <h3><?= __('Results') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('lesson_id') ?></th>
                <th><?= $this->Paginator->sort('word_id') ?></th>
                <th><?= $this->Paginator->sort('answer_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
            <tr>
                <td><?= $this->Number->format($result->id) ?></td>
                <td><?= $result->has('lesson') ? $this->Html->link($result->lesson->id, ['controller' => 'Lessons', 'action' => 'view', $result->lesson->id]) : '' ?></td>
                <td><?= $result->has('word') ? $this->Html->link($result->word->name, ['controller' => 'Words', 'action' => 'view', $result->word->id]) : '' ?></td>
                <td><?= $result->has('answer') ? $this->Html->link($result->answer->id, ['controller' => 'Answers', 'action' => 'view', $result->answer->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $result->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $result->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?>
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
