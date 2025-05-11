@extends('admin.template')

@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Icerik Duzenle : {{$yazi->baslik}}</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="{{ route('yazilar.update', $yazi->id) }}" method="POST"   class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="control-group">
                            <label class="control-label">Kategori Secin:</label>
                            <div class="controls">
                                <select name="kategori" class="span11">
                                    <option value="{{$yazi->kategorisi->id}}">{{$yazi->kategorisi->baslik}}</option>
                                    @foreach($kategoriler as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->baslik}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Icerik Baslik:</label>
                            <div class="controls">
                                <input type="text" class=".span11" name="baslik" placeholder="Baslik"  value="{{$yazi->baslik}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Icerik Aciklama :</label>
                            <div class="controls">
                                <textarea name="icerik" class="span11" id="" cols="30" rows="10">{{$yazi->icerik}}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Icerik Resmi:</label>
                            <div class="controls">
                                <input type="file" class=".span11" name="resim"   />
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Icerik Kaydet</button>
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

    <script src="/admin/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>

@endsection
