<?php

namespace App\Http\Controllers\admin\kategori;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kategoriler;
use App\Models\YayinEvi;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Kategoriler::paginate(10);
        return view('admin.kategori.index',['data'=>$all]);
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] =mHelper::class::permalink($all['name']);

        $insert = Kategoriler::create($all);
        if ($insert)
        {
            return redirect()->back()->with('status','Kategori Basari ile eklendi');
        }
        else
        {
            return redirect()->back()->with('status','Kategori eklenemedi');

        }
    }

    public function edit($id)
    {
        $data = Kategoriler::where('id','=',$id)->get();
        return view('admin.kategori.edit',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $update = Kategoriler::where('id','=',$id)->update($all);
        if ($update)
        {
            return redirect()->back()->with('status','Kategori Duzenlendi');
        }
        else {
            return redirect()->back()->with('status','Kategori Duzenlenemedi');
        }
    }

    public function delete($id)
    {
        $delete = Kategoriler::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
