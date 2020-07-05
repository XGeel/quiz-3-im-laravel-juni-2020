<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ArticleModel;

class ArticleController extends Controller
{   
    public function show(){
        $article = ArticleModel::get_all();
        return view('article',compact('article'));
    }

    public function show_by_id($id_article){
        $article = ArticleModel::show_by_id($id_article);
        return view('id_article',compact('article'));
    }

    public function form_create(){
        return view('create');
    }

    public function store(Request $request){
        $article = ArticleModel::store($request->all());
        return redirect('/artikel');
    }

    public function form_edit($id_article){
        $article = ArticleModel::show_by_id($id_article);
        return view('edit',compact('article'));
    }

    public function update($id_article,Request $request){
        $article = ArticleModel::update($request->all(),$id_article);
        return redirect('/artikel');
    }

    public function destroy($id_article){
        $article = ArticleModel::destroy($id_article);
        return redirect('/artikel');
    }

}

?>