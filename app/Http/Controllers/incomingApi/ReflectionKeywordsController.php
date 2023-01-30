<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\reflectionkeywords\StoreReflectionKeywordsRequest;
use App\Models\ReflectionKeyword;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ReflectionKeywordsController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reflectionKeywords = ReflectionKeyword::all();
        return $this->success([
            'reflectionKeywords' => $reflectionKeywords
        ]);
    
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReflectionKeywordsRequest $request)
    {
        $request->validated();

        // if id is come in request
        if($request->id){
            // is duplicate
            if(ReflectionKeyword::find($request->id)){
                return $this->error([
                    'reflectionKeyword' => $request->all()
                ], 'ReflectionKeyword already exists with this id '. $request->id, 400);
            }
        }

        $reflectionKeyword = ReflectionKeyword::create($request->all());
        
        return $this->success([
            'reflectionKeyword' => $reflectionKeyword
        ], 'ReflectionKeyword created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if reflectionKeyword not found
        if(!$reflectionKeyword = ReflectionKeyword::find($id)){
            return $this->error([
                'reflectionKeyword' => $reflectionKeyword
            ], 'ReflectionKeyword not found', 404);
        }

        // if reflectionKeyword found
        return $this->success([
            'reflectionKeyword' => $reflectionKeyword
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
        // if reflectionKeyword not found
        if(!$reflectionKeyword = ReflectionKeyword::find($id)){
            return $this->error([
                'reflectionKeyword' => $reflectionKeyword
            ], 'ReflectionKeyword not found', 404);
        }

        // if reflectionKeyword found
        $reflectionKeyword->update($request->all());
        return $this->success([
            'reflectionKeyword' => $reflectionKeyword
        ], 'ReflectionKeyword updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if reflectionKeyword not found
        if(!$reflectionKeyword = ReflectionKeyword::find($id)){
            return $this->error([
                'reflectionKeyword' => $reflectionKeyword
            ], 'ReflectionKeyword not found', 404);
        }

        // if reflectionKeyword found
        $reflectionKeyword->delete();
        return $this->success([
            'reflectionKeyword' => $reflectionKeyword
        ], 'ReflectionKeyword deleted successfully');
        
    }
}
