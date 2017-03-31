<?php

namespace App\Http\Controllers;

use App\Notebook;
use Illuminate\Http\Request;


class NotebookController extends Controller
{
    public function index() {
    	$notebooks = Notebook::all();
    	return view('notebooks.index', compact('notebooks'));
    }

    public function create() {
    	return view('notebooks.create');
    }

    public function store(Request $request) {
		$dataInput = $request->all();
		Notebook::create($dataInput);

		return redirect('/notebooks');
    }


    public function edit($id) {

    	$notebook = Notebook::where('id', $id)->first();
    	return view('notebooks.edit')->with('notebook', $notebook);

    }

    public function update(Request $request, $id) {
		$notebook = Notebook::where('id', $id)->first();
		$notebook->update($request->all());

		return redirect('/notebooks');
    }

    public function destroy($id) {
	    $notebook = Notebook::where('id', $id)->first();
	    $notebook->delete();

	    return redirect('/notebooks');
    }
}
