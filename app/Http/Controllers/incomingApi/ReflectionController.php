<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\reflections\StoreReflectionRequest;
use Illuminate\Http\Request;
use App\Models\Reflection;
use App\Traits\HttpResponses;

class ReflectionController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all
        $reflections = Reflection::all();
        return $this->success([
            'reflections' => $reflections
        ]);
    
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReflectionRequest $request){

        $request->validated();
        // check if id is come in request
        if($request->id){
            // is duplicate
            if(Reflection::find($request->id)){
                return $this->error([
                    'reflection' => $request->all()
                ], 'Reflection already exists with this id '. $request->id, 400);
            }
        }

        $reflection = Reflection::create($request->all());
        return $this->success([
            'reflection' => $reflection
        ], 'Reflection created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if client not found
        if(!$reflection = Reflection::find($id)){
            return $this->error([
                'reflection' => $reflection
            ], 'Reflection not found', 404);
        }

        // if client found
        return $this->success([
            'reflection' => $reflection
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
        // if reflection not found
        if(!$reflection = Reflection::find($id)){
            return $this->error([
                'reflection' => $reflection
            ], 'Reflection not found', 404);
        }

        // if reflection found
        $reflection->update($request->all());
        return $this->success([
            'reflection' => $reflection
        ], 'Reflection updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if reflection not found
        if(!$reflection = Reflection::find($id)){
            return $this->error([
                'reflection' => $reflection
            ], 'Reflection not found to delete', 404);
        }

        // if reflection found
        $reflection->delete();
        return $this->success([
            'reflection' => $reflection
        ], 'Reflection deleted successfully');
    }
}
