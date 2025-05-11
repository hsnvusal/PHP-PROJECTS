@extends('admin.template')

@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Icerik Ekle</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="{{route('yazilar.store')}}" method="post"   class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="control-group">
                            <label class="control-label">Kategori Secin:</label>
                            <div class="controls">
                                <select name="kategori" class="span11">
                                    @foreach($kategoriler as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->baslik}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Icerik Baslik:</label>
                            <div class="controls">
                                <input type="text" class=".span11" name="baslik" placeholder="Baslik"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Icerik Aciklama :</label>
                            <div class="controls">
                                <textarea name="icerik" class="span11" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Icerik Resmi:</label>
                            <div class="controls">
                                <input type="file" class=".span11" name="resim"   />
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Icerik Ekle</button>
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
