<?php

namespace App\Http\Controllers\admin\yazar;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
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
        $data = Yazarlar::paginate(10);
        return view('admin.yazar.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.yazar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $all  = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['image'] = imageUpload::singleUpload(rand(1,9000),'yazar',$request->file('image'));
        $insert = Yazarlar::create($all);
        if ($insert)
        {
            return redirect()->back()->with('status','yazar Eklendi');
        }
        else {
            return redirect()->back()->with('status','yazar Eklenemedi');

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
        $c = Yazarlar::Where('id','=',$id)->count();
        if ($c!=0)
        {
            $data  = Yazarlar::where('id','=',$id)->get();
            return view('admin.yazar.edit',['data'=>$data]);
        }
        else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->route('id');

        $c = Yazarlar::Where('id','=',$id)->count();
        if ($c!=0)
        {
            $data  = Yazarlar::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $all['image'] = imageUpload::singleUploadUpdate(rand(1,900),'yazar',$request->file('image'),$data,'image');

            $update = Yazarlar::where('id','=',$id)->update($all);

            if ($update)
            {
                return redirect()->back()->with('status','Yazar Basari ile yenilendi');
            }
            else {
                return redirect()->back()->with('status','Yazar  yenilenemedi');

            }
        }
        else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $c = Yazarlar::Where('id','=',$id)->count();
        if ($c!=0)
        {
            $x = Yazarlar::where('id','=',$id)->get();
            File::delete('public/'.$x[0]['image']);
            Yazarlar::where('id','=',$id)->delete();
            return redirect()->back();
        }
        else
        {
            return redirect('/');
        }
    }
}
