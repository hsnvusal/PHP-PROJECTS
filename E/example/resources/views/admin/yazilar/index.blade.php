@extends('admin.template')

@section('icerik')
    <div style="float: right"><a href="{{route('yazilar.create')}}" class="btn btn-success">Kategori Ekle</a></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kategori Yonetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Yazi baslik</th>
                    <th>Kategori </th>
                    <th>Yazar</th>
                    <th>Duzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($yazilar as $yazi)
                    <tr class="gradeX">
                        <td>{{$yazi->baslik}}</td>
                        <td>
                            {{$yazi->kategorisi->baslik}}
                        </td>
                        <td>{{$yazi->kullanici->name}}</td>
                        <td class="center"><a href="{{route('yazilar.edit',$yazi->id)}}" class="btn btn-success">Duzenle</a></td>
                        <td>
                            <form action="{{route('yazilar.destroy',$yazi->id)}}" method="POST">
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
