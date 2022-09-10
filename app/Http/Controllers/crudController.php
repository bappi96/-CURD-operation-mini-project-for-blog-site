<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class crudController extends Controller
{
    private $protal,$news;

    public function index(){
        $this->news = News::all();
        return view('crud.home',['newses'=>$this->news]);

    }
    public function add(){
        return view('crud.add');
    }
    public function create(Request $request)
    {
        $this->protal = new News() ;
        $this->protal->newsPortal($request);
        return redirect('/add')->with('message','Blog info create successfully.');

    }
    public function manage()
    {
        $this->news = News::all();
        return view('crud.manage',['newses'=>$this->news]);
    }
    public function delete($id)
    {
        News::deleteNews($id);
        return redirect('/manage')->with('message','Student info Delete successfully.');
    }
    public function update($id)
    {
        $this->news = News::find($id);
        return view('crud.edit',['news' => $this->news]);
    }
    public function edit(Request $request,$id)
    {
        News::updateNews($request,$id);
        return redirect('/manage')->with('message','Course info Update successfully.');
    }

}
