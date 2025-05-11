@extends('admin.template')

@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Site Ayarlari</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="{{route('ayarlar.update',1)}}" method="post"  enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="control-group">
                            <label class="control-label">Site Baslik :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="baslik" placeholder="First name" value="{{$ayarlar->baslik}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site Aciklama :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="aciklama" placeholder="Last name" value="{{$ayarlar->aciklama}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email Adresi</label>
                            <div class="controls">
                                <input type="email"  class="span11" name="email" placeholder="Enter Password" value="{{$ayarlar->email}}"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Logo :</label>
                            <div class="controls">
                                <input type="file" class="span11" name="logo"  value="{{$ayarlar->logo}}" />
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection


@section('css')

@endsection
@section('js')

@endsection
