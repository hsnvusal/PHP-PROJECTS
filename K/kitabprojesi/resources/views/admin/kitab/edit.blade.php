@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session('status'))
                        <div class="alert alert-primary">
                            {{session("status")}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Kitab Duzenle </h4>
                            <p class="card-category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.kitab.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kitab Adi</label>
                                            <input type="text" name="name" class="form-control" value="{{$data[0]['name']}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            @if($data[0]['image']!="")
                                                <img src="{{asset($data[0]['image'])}}" alt="">
                                            @endif
                                            <input type="file" name="image" style="opacity: 1;position:static;" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kitab Fiyati</label>
                                            <input type="text" name="fiyat" class="form-control" value="{{$data[0]['fiyat']}}" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kitab Yazari</label>
                                            <select name="yazarid"  class="form-control"  id="">
                                                @foreach($yazar as $key =>$value)
                                                    <option @if($value['id'] === $data[0]['yazarid']) selected @endif  value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yayin Evi</label>
                                            <select name="kategoriid"  class="form-control"  id="">
                                                @foreach($kategori as $key =>$value)
                                                    <option @if($value['id'] === $data[0]['kategoriid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yayin Evi</label>
                                            <select name="yayineviid"  class="form-control"  id="">
                                                @foreach($yayinevi as $key =>$value)
                                                    <option @if($value['id'] === $data[0]['yayineviid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kitab Aciklama</label>
                                            <textarea name="aciklama" class="form-control"  cols="30" rows="10">{{$data[0]['aciklama']}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Kitab Duzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
