<?php

namespace App\Http\Controllers;

use App\article;
use App\category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = array(
            'm_dash' => 'highlight'
        );
        return View('backend.dashboard', $data);
        //
    }

    /* Category */

    public function category(){
        $data = array(
            'm_category' => 'highlight',
            'table' => category::paginate(5),
        );
        //dd(category::all());
        return View('backend.category', $data);
    }
    public function categoryStore(Request $request){
        $cat=$request->all();

        if($cat['id']==''){
            category::create($request->all());
        } else {
            $category = category::find($cat['id']);
            $category->nm_category = $cat['nm_category'];
            $category->save();
        }
        //return redirect(URL::route('category.index'))->with('message', $cat['nm_category'].'#'.$cat['id']);
        return Redirect::route('category.index')->with('message', $cat['nm_category'].'#'.$cat['id']);
    }

    public function categoryDel($id){
        $category = category::find($id);
        $category->delete();

        return Redirect::back()->with('message','success delete');
    }
    /* End Category */


    /* Article */

    public function article(){
        $data = array(
            'm_article' => 'highlight',
            'category' => category::all()
        );
        return View('backend.article', $data);
    }

    public function articleStore(Request $request){
        $art=$request->all();

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        //article::create($request->all());

        $article = new article();
        $article->id_category = $art['id_category'];
        $article->title       = $art['title'];
        $article->desc        = $art['desc'];
        $article->content     = $art['content'];
        $article->tag         = $art['tag'];
        $article->mime        = $file->getClientMimeType();
        $article->filename    = $file->getFilename().'.'.$extension;
        $article->original_filename = $file->getClientOriginalName();

        $article->save();
        return redirect('admin/article')->with('message', 'success');
    }

    public function getPicture($filename){

        $picture = article::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($picture->filename);

        return response($file, 200)->header('Content-Type', $picture->mime);
    }

    /* End Article */

    public function test(){
        return View('backend.test');
    }

    public  function editor(){
        return View('backend.editor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
