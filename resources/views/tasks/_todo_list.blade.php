@forelse($tasks as $task)
<div class="card mb-3">
    <div class="card-header">{{ $task->name }}</div>
    <div class="card-body">
        <p>{{ $task->description }}</p>
    </div>
    <div class="card-footer text-center">
    @displayDate($task->start_date, 'Y-m-d') - @displayDate($task->end_date, 'Y-m-d')
    </div>
</div>

@empty
<p>No tasks found.</p>
@endforelse
