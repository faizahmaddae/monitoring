<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\keywords\StoreKeywordsRequest;
use App\Models\Keywords;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class KeywordsController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keywords = Keywords::all();
        return $this->success([
            'keywords' => $keywords
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeywordsRequest $request)
    {
        $request->validated();

        // check if id is come in request
        if($request->id){
            // is duplicate
            if(Keywords::find($request->id)){
                return $this->error([
                    'keywords' => $request->all()
                ], 'Keywords already exists with this id '. $request->id, 400);
            }
        }

        $keywords = Keywords::create($request->all());
        return $this->success([
            'keywords' => $keywords
        ], 'Keywords created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if keywords not found
        if(!$keywords = Keywords::find($id)){
            return $this->error([
                'keywords' => $keywords
            ], 'Keywords not found', 404);
        }

        // if keywords found
        return $this->success([
            'keywords' => $keywords
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
        // if keywords not found
        if(!$keywords = Keywords::find($id)){
            return $this->error([
                'keywords' => $keywords
            ], 'Keywords not found', 404);
        }

        // if keywords found
        $keywords->update($request->all());
        return $this->success([
            'keywords' => $keywords
        ], 'Keywords updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if keywords not found
        if(!$keywords = Keywords::find($id)){
            return $this->error([
                'keywords' => $keywords
            ], 'Keywords not found', 404);
        }

        // if keywords found
        $keywords->delete();
        return $this->success([
            'keywords' => $keywords
        ], 'Keywords deleted successfully');
        
    }
}
