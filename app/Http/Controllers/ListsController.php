<?php

namespace todos\Http\Controllers;

use Illuminate\Http\Request;

use todos\Http\Requests;
use todos\Http\Controllers\Controller;

use todos\Todolist;
use todos\Http\Requests\ListFormRequest;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists = Todolist::all();

        return view('lists.index')->with('lists', $lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('lists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     *
     * @return Response
     */
    public function store(ListFormRequest $request)
    {
        $list = new Todolist([
            'name'        => $request->get('name'),
            'description' => $request->get('description')
        ]);
        $list->save();

        return \Redirect::route('lists.create')->with('message', 'Your list has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $list = Todolist::find($id);

        return view('lists.show')->with('list', $list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $list = Todolist::find($id);

        return view('lists.edit')->with('list', $list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int     $id
     *
     * @return Response
     */
    public function update(ListFormRequest $request, $id)
    {
        $list = Todolist::find($id);

        $list->update([
            'name'        => $request->get('name'),
            'description' => $request->get('description')
        ]);

        return \Redirect::route('lists.edit', [$list->id])->with('message', 'Your list has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Todolist::destroy($id);

        return \Redirect::route('lists.index')->with('message', 'The list has been deleted!');
    }
}
