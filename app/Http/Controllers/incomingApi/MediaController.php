<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\media\StoreMediaRequest;
use App\Models\Media;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::all();
        return $this->success([
            'media' => $media
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaRequest $request)
    {
        // if id is come in request
        if($request->id){
            // is duplicate
            if(Media::find($request->id)){
                return $this->error([
                    'media' => $request->all()
                ], 'Media already exists with this id '. $request->id, 400);
            }
        }

        $media = Media::create($request->all());
        return $this->success([
            'media' => $media
        ], 'Media created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if media not found
        if(!$media = Media::find($id)){
            return $this->error([
                'media' => $media
            ], 'Media not found', 404);
        }

        // if media found
        return $this->success([
            'media' => $media
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
        // if media not found
        if(!$media = Media::find($id)){
            return $this->error([
                'media' => $media
            ], 'Media not found', 404);
        }

        // if media found
        $media->update($request->all());
        return $this->success([
            'media' => $media
        ], 'Media updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if media not found
        if(!$media = Media::find($id)){
            return $this->error([
                'media' => $media
            ], 'Media not found for delete', 404);
        }

        // if media found
        $media->delete();
        return $this->success([
            'media' => $media
        ], 'Media deleted successfully');

    }
}
