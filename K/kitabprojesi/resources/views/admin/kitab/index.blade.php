@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.kitab.create' )}}" class="btn btn-success">Kitab Ekle</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Kitablar</h4>
                            <p class="card-category"> Burada Eklenen kitablari bulabilirsiniz</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Isim
                                    </th>
                                    <th>
                                        Duzenle
                                    </th>
                                    <th>
                                        Sil
                                    </th>

                                    </thead>

                                    <tbody>
                                    @foreach($data as $key => $value)


                                        <tr>

                                            <td>
                                                {{$value['name']}}
                                            </td>
                                            <td>
                                                <a href="{{route('admin.kitab.edit',['id'=>$value['id']])}}">Duzenle</a>
                                            </td>

                                            <td class="text-primary">
                                                <a href="{{route('admin.kitab.delete',['id'=>$value['id']])}}">Sil</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$data->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
