<?php

namespace App\Http\Controllers\admin\slider;

use App\Helper\imageUpload;
use App\Http\Controllers\Controller;
use App\Models\SLider;
use Illuminate\Http\Request;

class  indexController extends Controller
{
    public  function index()
    {
        $data = SLider::paginate(10);
        return view('admin.slider.index',['data'=>$data]);
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $all['image'] = imageUpload::singleUpload(rand(1,9000),'slider',$request->file('image'));
        if ($all['image']!='') {

            $insert = Slider::create($all);
            if ($insert) {
                return redirect()->back()->with('status', 'Slider Basari ile eklendi');

            } else {
                return redirect()->back()->with('status', 'Slider eklenemedi');
            }
        }
        else {
            return redirect()->back()->with('status', 'Slider eklenemedi');

        }
    }

    public function edit($id)
    {
        $data = Slider::where('id','=',$id)->first();
        return view('admin.slider.edit',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $data = Slider::where('id','=',$id);
        $all['image'] = imageUpload::singleUploadUpdate(rand(1,9000),'slider',$request->file('image'),$data,'image');
        if ($all['image']!='') {

            $insert = Slider::where('id','=',$id)->update($all);
            if ($insert) {
                return redirect()->back()->with('status', 'Slider Duzenlendi');

            } else {
                return redirect()->back()->with('status', 'Slider Duzenlenemedi');
            }
        }
        else {
            return redirect()->back()->with('status', 'Slider Duzenlenemedi');

        }
    }

    public function delete($id)
    {
        $data = Slider::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
