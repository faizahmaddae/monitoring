<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\clients\StoreClientRequest;
use App\Models\Client;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    use HttpResponses;
    
    public function index()
    {
        $clients = Client::all();
        return $this->success([
            'clients' => $clients
        ]);
    }

    
    public function store(StoreClientRequest $request)
    {
        $request->validated();

        // check if id is come in request
        if($request->id){
            // is duplicate
            if(Client::find($request->id)){
                return $this->error([
                    'client' => $request->all()
                ], 'Client already exists with this id '. $request->id, 400);
            }
        }

        $client = Client::create($request->all());
        return $this->success([
            'client' => $client
        ], 'Client created successfully');
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
        if(!$client = Client::find($id)){
            return $this->error([
                'client' => $client
            ], 'Client not found', 404);
        }

        // if client found
        return $this->success([
            'client' => $client
        ]);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        // if client not found
        if(!$client = Client::find($id)){
            return $this->error([
                'client' => $client
            ], 'Client not found for update', 404);
        }

        // if client found
        $client->update($request->all());
        return $this->success([
            'client' => $client
        ], 'Client updated successfully');
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete client
        $client = Client::find($id);
        $client->delete();
        return $this->success([
            'client' => $client
        ], 'Client deleted successfully');
    }
}
