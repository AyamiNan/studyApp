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

    //public function Todoの新規作成() //TodoチェックリストアプリのTodoの新規作成についてのテスト
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
//テスト（更新/詳細取得/削除）成功/失敗
public function Todoの新規作成失敗() //新規処理のテスト失敗ケース
    {
        $params = [
            'title' =>'テスト:タイトル',
            'content' => 'テスト:内容'
        ];
        $res = $this->postJson(route('api.todo.create'), $params);
        $res->assertOk();
        $todos = Todo::all();

        $this->assertCount(2, $todos);

        $todo= $todos->first();

        $this->assertEquals($params['title'], $todo->title);
        $this->assertEquals($params['content'], $todo->content);
    }


   // public function test_example()
  //  {
   //     $response = $this->get('/');

    //    $response->assertStatus(200);
   // }
}