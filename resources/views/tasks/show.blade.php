@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2 class="text-lg">タスク一覧</h2>
    </div>

    @if (isset($task))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                    <th>作成日</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->created_at }}</td>
                </tr>
            </tbody>
        </table>

        {{-- タスク編集ページへのリンク --}}
        <a class="btn btn-outline" href="{{ route('tasks.edit', $task->id) }}">このメッセージを編集</a>

        {{-- タスク削除フォーム --}}
        <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" class="my-2">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-error btn-outline"
                onclick="return confirm('id = {{ $task->id }} のタスクを削除します。よろしいですか？')">削除</button>
        </form>

    @endif

@endsection