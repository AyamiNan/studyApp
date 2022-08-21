@extends('layouts.app') @section('content')

<div class="border-solid border-b-2 border-gry-500 p-2 mb-2">
  <div class="flex justify-between">
    <h2 class="text-base mb-4">新規追加</h2>
    <button
      class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
    >
      <a href="{{ route('todo.index') }}">戻る</a>
    </button>
  </div>
  <form method="POST">
    <div class="mb-4">
      <label
        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
      >
        Title
      </label>
      <input
        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        type="text"
        name="title"
        placeholder="新規のTodo"
      />
    </div>
    {!! Form::open(['route' => 'todo.store']) !!}
    <div class="mb-4">
      <label
        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
      >
        内容
      </label>
      {!! Form::textarea('content', null, ['required', 'class' => 'appearance-none
  block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4
  leading-tight focus:outline-none focus:bg-white focus:border-gray-500',
  'placeholder' => '新規Todo']) !!}
      <input
        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        type="text"
        name="content"
        placeholder="新規のTodo"
      />
    </div>
    {!! Form::submit('登録', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white
font-bold py-2 px-4 rounded']) !!}
{!! Form::close() !!}
    <button
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
      type="submit"
    >
      登録
    </button>
  </form>
</div>

@endsection