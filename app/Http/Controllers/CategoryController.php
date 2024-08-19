<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
        public function index(){
                return view('task1.index');
        }
	public function index2(){
		$categories = Category::get();
		//return $categories;
                return view('task2.index', compact('categories'));
	}

	public function create(){
                return view('task2.create');
        }
        public function store(Request $request){
		$request->validate([
			'name' => 'required|max:255|string',
			'description' => 'required|max:255|string',
			'cost' => 'sometimes'
		]);
		Category::create([
			'name' => $request->name,
			'description' => $request->description,
			'cost' => $request->cost,
		]);
		return redirect('task2/create')->with('status','Category Created');
	}
	
	public function edit(int $id){
		$category = Category::findOrFail($id);
		//return $category;
		return view('task2.edit', compact('category'));
	}

	public function update(Request $request, int $id){
                $request->validate([
                        'name' => 'required|max:255|string',
                        'description' => 'required|max:255|string',
                        'cost' => 'sometimes'
                ]);
                Category::findOrFail($id)->update([
                        'name' => $request->name,
                        'description' => $request->description,
                        'cost' => $request->cost,
                ]);
                return redirect()->back()->with('status','Category Updated');	
	}

	public function destroy(int $id){

		$category = Category::findOrFail($id);
		$category->delete();

		return redirect()->back()->with('status','Category Deleted');
	}
    //
}
