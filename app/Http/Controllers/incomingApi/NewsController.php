<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\news\StoreNewsRequest;
use App\Models\News;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return $this->success([
            'news' => $news
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $request->validated();

        // if id is come in request
        if($request->id){
            // is duplicate
            if(News::find($request->id)){
                return $this->error([
                    'news' => $request->all()
                ], 'News already exists with this id '. $request->id, 400);
            }
        }

        $news = News::create($request->all());

        return $this->success([
            'news' => $news
        ], 'News created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if news is not found
        if(!$news = News::find($id)){
            return $this->error([
                'news' => $id
            ], 'News not found with this id '. $id, 404);
        }

        return $this->success([
            'news' => $news
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
        // if news is not found
        if(!$news = News::find($id)){
            return $this->error([
                'news' => $id
            ], 'News not found with this id '. $id, 404);
        }

        $news->update($request->all());

        return $this->success([
            'news' => $news
        ], 'News updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if news is not found
        if(!$news = News::find($id)){
            return $this->error([
                'news' => $id
            ], 'News not found with this id '. $id, 404);
        }

        $news->delete();

        return $this->success([
            'news' => $news
        ], 'News deleted successfully');
    }
}
