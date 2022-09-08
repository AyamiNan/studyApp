<?php
declare(strict_types=1); //追記
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; //追記

class TodoController extends Controller
{
    //「Controllerの仕上げ」　追記
    /** var Todo */
    private Todo $todo;
      /**
    * constructor function
    * @param Todo $todo
    */
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }
    // ここまで追記

   /**
    * constructor function
    */
  //  public function __construct() //追記
   // {
   // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Hello Worldを出力
       // return "Hello world!!";
       //blade.php作ったのでControllerの修正
       // return view('layouts.app');
       //$todos = $this->todo->all();  // 追記
       $todos = $this->todo->orderby('updated_at', 'desc')->paginate(5);
        return view('todo.index', ['todos' => $todos]);  // 編集 indexメソッド編集
    //   return view('todo.index');  // 追記　viewの分割で追記
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        /**
    * create function
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('todo.create');  // 追記
    } 
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            // 以下 returnまで追記
            $validated = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'content' => ['required', 'string', 'max:255']
            ]);
    
            $this->todo->fill($validated)->save();
    
            return redirect()->route('todo.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $todo = $this->todo->findOrFail($id);  // 追記
        return view('todo.edit', ['todo' => $todo]);  // 追記  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255']
        ]);
        $this->todo->findOrFail($id)->update($validated);
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->todo->findOrFail($id)->delete();
        return redirect()->route('todo.index');
    }
}
