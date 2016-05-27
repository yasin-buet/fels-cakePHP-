<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lessons'), ['controller' => 'Lessons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lesson'), ['controller' => 'Lessons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="results view large-9 medium-8 columns content">
    <h3><?= h($result->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Lesson') ?></th>
            <td><?= $result->has('lesson') ? $this->Html->link($result->lesson->id, ['controller' => 'Lessons', 'action' => 'view', $result->lesson->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Word') ?></th>
            <td><?= $result->has('word') ? $this->Html->link($result->word->name, ['controller' => 'Words', 'action' => 'view', $result->word->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Answer') ?></th>
            <td><?= $result->has('answer') ? $this->Html->link($result->answer->id, ['controller' => 'Answers', 'action' => 'view', $result->answer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($result->id) ?></td>
        </tr>
    </table>
</div>
