<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getAllTodo(){
        try {
            $todos = Todo::all();

            return view("Todolist", ["todos"=> $todos]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function addTodo(Request $req){
        try {
            $newTodo = new Todo([
                "title"=> $req->input("title"),
                "description"=> $req->input("description"),
                "userId"=>1
            ]);
            $newTodo->save();

            return redirect()->to("/todos");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function deleteTodo(Request $req){
        try {
            try {
                Todo::destroy($req->input("deleteId"));
                return redirect()->to("/todos");
            } catch (\Throwable $th) {
                throw $th;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getEditTodo(Request $req, $id){
        $todo = Todo::find($id);

        return view("editTodo", ["todo"=>$todo]);
    }

    public function editTodo(Request $req, $id){
        try {
            $todo = Todo::find($id);
            $todo->title = $req->input("title");
            $todo->description = $req->input("description");
            $todo->userId = 1;
            $todo->save();

            return redirect()->to("/todos");
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
