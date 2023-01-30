<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return $this->success([
            'categories' => $categories
        ]);
    
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        // if id is come in request
        if($request->id){
            // is duplicate
            if(Category::find($request->id)){
                return $this->error([
                    'category' => $request->all()
                ], 'Category already exists with this id '. $request->id, 400);
            }
        }

        $category = Category::create($request->all());
        return $this->success([
            'category' => $category
        ], 'Category created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if category not found
        if(!Category::find($id)){
            return $this->error([
                'category' => $id
            ], 'Category not found with id '. $id, 404);
        }

        $category = Category::find($id);
        return $this->success([
            'category' => $category
        ]);
    
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if category not found
        if(!Category::find($id)){
            return $this->error([
                'category' => $id
            ], 'Category not found with id '. $id, 404);
        }

        $category = Category::find($id);
        $category->update($request->all());
        return $this->success([
            'category' => $category
        ], 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if category not found
        if(!Category::find($id)){
            return $this->error([
                'category' => $id
            ], 'Category not found with id '. $id, 404);
        }

        $category = Category::find($id);
        $category->delete();
        return $this->success([
            'category' => $category
        ], 'Category deleted successfully');
    }
}
