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
                            <h4 class="card-title">Yayin Evi Duzenle</h4>
                            <p class="card-category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.yayinevi.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yayin Evi Adi</label>
                                            <input value="{{$data[0]['name']}}" type="text" name="name" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Yayin Evi Duzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
