@extends('admin.template')

@section('icerik')
    <div style="float: right"><a href="{{route('kategoriler.create')}}" class="btn btn-success">Kategori Ekle</a></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kategori Yonetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Kategori baslik</th>
                    <th>Kategori turu</th>
                    <th>Kategori Aciklama</th>
                    <th>Duzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($kategoriler as $kategori)
                    <tr class="gradeX">
                        <td>{{$kategori->baslik}}</td>
                        <td>
                            @if(!empty($kategori->ust_id))
                                Alt Kateogori
                            @else
                                Ana Kategori
                            @endif
                        </td>
                        <td>{{$kategori->aciklama}}</td>
                        <td class="center"><a href="{{route('kategoriler.edit',$kategori->id)}}" class="btn btn-success">Duzenle</a></td>
                        <td>
                            <form action="{{route('kategoriler.destroy',$kategori->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger">Sil</button>
                            </form>
                        </td>

                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('css')
    @endsection

@section('js')

@endsection
