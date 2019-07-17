<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Article;
 
class ArticleController extends Controller
{
    public function index() // show het du lieu
    {
        $article = Article::orderBy('id','desc')->get();
        return response()->json(['data'=>$article]);
    }

    public function show(Request $request,$id)
    {
        $article = Article::find($id);
        if($article){
            return $article;
        }else{
            return response()->json(['welcome'=>'id cua ban ban khong co trong database erro no data']);
        }
    }

    public function store(Request $request)
    {   
        $title = $request->input('title');
        $body  = $request->input('body');
        if ($title != null && $body != null) {
            $article = Article::create($request->all());
            return response()->json(['data'=>$article,'success'=>'Thêm thành công','status'=>1]);
        }else{
            return response()->json(['welcome'=>'erro thieu cac truong trong bang table ']);
        }
    }

    public function update(Request $request,$id)
    {
        $article = Article::find($id);
        $title   = $request->input('title');
        $body    = $request->input('body');
        if($article && $title != null && $body != null){
            $article->update($request->all());
            return response()->json($article, 200);
        }else{
            return response()->json(['mess'=>'loi roi dai ca']);
        }
        
    }

    public function delete(Request $request,$id)
    {
        $article = Article::find($id);
        if($article){
            $article->delete();
            return response()->json(['success'=>'xoa thanh cong']);
        }else{
            return response()->json(['mess'=>'id not found']);
        }
        
    }
}