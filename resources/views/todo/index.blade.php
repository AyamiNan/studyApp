@extends('layouts.app')
<!-- 追記 -->
@section('content')
<!-- 追記 -->
<div class="mt-20 mb-10 flex justify-between">
  <h1 class="text-base">TODO一覧</h1>
  <button
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
  >
    <a href="{{ route('todo.create') }}">新規追加</a>
  </button>
</div>
<div>
  <table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">タイトル</th>
        <th class="px-4 py-2">やること</th>
        <th class="px-4 py-2">作成日時</th>
        <th class="px-4 py-2">更新日時</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border px-4 py-2">Todoのタイトルです</td>
        <td class="border px-4 py-2">Todoの内容です</td>
        <td class="border px-4 py-2">2022-02-01 00:00:00</td>
        <td class="border px-4 py-2">2022-02-10 00:00:00</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
<!-- 追記 -->