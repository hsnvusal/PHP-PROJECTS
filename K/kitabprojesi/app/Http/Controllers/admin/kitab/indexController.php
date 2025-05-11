<?php

namespace App\Http\Controllers\admin\kitab;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kategoriler;
use App\Models\Kitablar;
use App\Models\YayinEvi;
use App\Models\Yazarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kitablar::paginate(10);
        return view('admin.kitab.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $yazar = Yazarlar::all();
        $yayinevi = YayinEvi::all();
        $kategori = Kategoriler::all();
        return view('admin.kitab.create',['yazar'=>$yazar,'yayinevi'=>$yayinevi,'kategori'=>$kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['image'] = imageUpload::singleUpload(rand(1,9000),'kitab',$request->file('image'));

        $insert = Kitablar::create($all);

        if ($insert) {
            return redirect()->back()->with('status','Kitab eklendi');

        }
        else {
            return redirect()->back()->with('status','Kitab eklenemedi');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $c = Kitablar::where('id','=',$id)->count();
        if ($c!=0)
        {
            $yazar = Yazarlar::all();
            $yayinevi = YayinEvi::all();
            $kategori = Kategoriler::all();
            $data = Kitablar::where('id','=',$id)->get();
            return view('admin.kitab.edit',['data'=>$data,'yazar'=>$yazar,'yayinevi'=>$yayinevi,'kategori'=>$kategori]);
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->route('id');
        $c = Kitablar::where('id','=',$id)->count();
        if ($c!=0)
        {
            $data = Kitablar::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink']=mHelper::permalink($all['name']);
            $all['image']=imageUpload::singleUploadUpdate(rand(1,900),'kitab',$request->file('image'),$data,'image');
            $update = Kitablar::where('id','=',$id)->update($all);
            if ($update)
            {
                return redirect()->back()->with('status','Kitab Guncellendi');

            }
            else {
                return redirect()->back()->with('status','Kitab Guncellenemeidi');

            }
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $c = Kitablar::where('id','=',$id)->count();
        if ($c!=0)
        {
            $data = Kitablar::where('id','=',$id)->get();
            File::delete('public/'.$data[0]['image']);
            Kitablar::where('id','=',$id)->delete();
            return redirect()->back();
        }
        else {
            return redirect('/');
        }
    }
}
