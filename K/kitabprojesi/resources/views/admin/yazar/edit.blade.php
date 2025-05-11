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
                            <h4 class="card-title">Yazar Duzenle</h4>
                            <p class="card-category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.yazar.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yazar Adi</label>
                                            <input type="text" value="{{$data[0]['name']}}" name="name" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            @if($data[0]['image']!="")
                                                <img src="{{asset($data[0]['image'])}}" alt="">
                                            @endif
                                            <label class="bmd-label-floating">Yazar Resmi</label>
                                            <input style="opacity: 1;position: static" type="file" name="image"  >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yazar Bio</label>
                                            <textarea name="bio"  id="" cols="30" rows="10" class="form-control">{{$data[0]['bio']}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Yazar Duzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
