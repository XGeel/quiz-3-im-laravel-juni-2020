<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

function slug($judul){
    $slug = strtolower($judul);
    $slug = explode(" ",$slug);
    $slug = implode("-",$slug);
    return $slug;
}

class ArticleModel {

    public static function get_all(){
        $article = DB::table('articles')->get();
        return $article;
    }

    public static function store($request,$id_user=1){
        unset($request['_token']);
        $request['id_user']=$id_user;
        $request['slug']=slug($request['judul']);

        $article = DB::table('articles')->insert($request);
        return $article;
    } 

    public static function show_by_id($id_article){
        $article = DB::table('articles')->where('id','=',$id_article)->first();
        return $article;
    }

    public static function update($request,$id_article){
        unset($request['_token']);
        unset($request['_method']);
        $request['slug']=slug($request['judul']);

        $article = DB::table('articles')->where('id','=',$id_article)->update($request);
        return $article;
    }

    public static function destroy($id_article){
        $article = DB::table('articles')->where('id','=',$id_article)->delete();
        return $id_article;
    }
    
} 

?>