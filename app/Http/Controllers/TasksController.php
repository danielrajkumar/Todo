<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use DB;

class TasksController extends Controller {
    public function index() {
        $tasks = Task::orderBy( 'completed_at' )
        ->orderBy( 'id', 'DESC' )
        ->get();

        return view( 'tasks.index', [
            'tasks' => $tasks,
        ] );
    }

    public function create() {
        return view( 'tasks.create' );
    }

    public function store() {
        request()->validate( [
            'description' => 'required|max:255',
            'due_date' => 'required',
        ] );

        Task::create( [
            'description' => request( 'description' ),
            'due_date'=> request( 'due_date' ),
        ] );

        return redirect( '/dashboard' );
    }

    // public function edit( $id ) {
    //     $tasks = Task::orderBy( 'completed_at' )
    //     ->orderBy( 'id', 'DESC' )
    //     ->get();

    //     return view( 'tasks.update', [
    //         'tasks' => $tasks,
    // ] );
    // }

    // public function update( Request $request, $id ) {

    //     // $desc = $request->input( 'update_description' );
    //     // $due = $request->input( 'update_due_date' );

    //     $task = Task::where( 'id', $id )->first();
    //     // DB::update( 'update tasks set description = ?, due_date = ? where id = ?', [ $desc, $due, $id ] );
    //     request()->validate( [
    //         'description' => 'required|max:255',
    //         'due_date' => 'required',
    // ] );

    //     Task::update( [
    //         'description' => request( 'update_description' ),
    //         'due_date'=> request( 'update_due_date' ),
    // ] );

    //     return redirect( '/' );
    // }

    // Delete a task

    public function delete( $id ) {
        $task = Task::where( 'id', $id )->first();

        $task->delete();

        return redirect( '/dashboard' );
    }
}
