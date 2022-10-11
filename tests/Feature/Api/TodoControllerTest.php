<?php

namespace Tests\Feature\Api;

//use Illuminate\Foundation\Testing\RefreshDatabase; カリキュラムには記述ないのでコメントアウト
//use Illuminate\Foundation\Testing\WithFaker; カリキュラムには記述ないのでコメントアウト
use App\Models\Todo;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TodoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function setUp():void
    {
        parent::setUp();
    }

    /**
     * @test
     */

    //public function Todoの新規作成() //TodoチェックリストアプリのTodoの新規作成についてのテスト(一覧？)
    //{
        //$params = [
        //    'title' =>'テスト:タイトル',
        //    'content' => 'テスト:内容'
        //];
       // $res = $this->postJson(route('api.todo.create'), $params);
       // $res->assertOk();
       // $todos = Todo::all();

        //$this->assertCount(1, $todos);

        //$todo= $todos->first();

       // $this->assertEquals($params['title'], $todo->title);
        //$this->assertEquals($params['content'], $todo->content);
    //}

//課題
//Api実装
//APIのテスト（更新/詳細取得/削除）成功/失敗

//1 新規作成が失敗するテスト
//失敗とする条件：POSTされる内容が不十分だった場合
public function Todoの新規作成失敗() 
    {
        $res = $this->get('api.todo.create');
        $res->assertStatus(200);
        $todos = Todo::all();

    }

    //新規作成が失敗となるテストケース
    //新規作成 todo.create


    //2 更新処理
    //テストケース：成功
    //テストケース：失敗


    //3 詳細取得
    //テストケース：成功
    //テストケース：失敗

    //4 削除処理
    //テストケース：成功
    //テストケース：失敗

    //元からあるもの↓
   // public function test_example()
  //  {
   //     $response = $this->get('/');

    //    $response->assertStatus(200);
   // }
}