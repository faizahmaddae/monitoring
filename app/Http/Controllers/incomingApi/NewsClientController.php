<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\news_client\StoreNewsClientRequest;
use App\Models\NewsClient;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class NewsClientController extends Controller
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
        $newsClients = NewsClient::all();
        return $this->success([
            'newsClients' => $newsClients
        ]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsClientRequest $request)
    {
        // if id is come in request
        if($request->id){
            // is duplicate
            if(NewsClient::find($request->id)){
                return $this->error([
                    'newsClient' => $request->all()
                ], 'NewsClient already exists with this id '. $request->id, 400);
            }
        }

        $newsClient = NewsClient::create($request->all());
        return $this->success([
            'newsClient' => $newsClient
        ], 'NewsClient created successfully', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if newsClient not found
        if(!$newsClient = NewsClient::find($id)){
            return $this->error([
                'newsClient' => $newsClient
            ], 'NewsClient not found', 404);
        }

        // if newsClient found
        return $this->success([
            'newsClient' => $newsClient
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
        // if newsClient not found
        if(!$newsClient = NewsClient::find($id)){
            return $this->error([
                'newsClient' => $newsClient
            ], 'NewsClient not found', 404);
        }

        // if newsClient found
        return $this->success([
            'newsClient' => $newsClient
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // is exist
        if(!$newsClient = NewsClient::find($id)){
            return $this->error([
                'newsClient' => $newsClient
            ], 'NewsClient not found', 404);
        }

        // delete 
        $newsClient->delete();
        return $this->success([
            'newsClient' => $newsClient
        ], 'NewsClient deleted successfully', 200);

    }
}
