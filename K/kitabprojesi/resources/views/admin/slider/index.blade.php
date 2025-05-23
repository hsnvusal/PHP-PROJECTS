@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.slider.create' )}}" class="btn btn-success">Slider Ekle</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Slider</h4>
                            <p class="card-category"> Burada Eklenen SLiderlari bulabilirsiniz</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        OnIzleme
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
                                                <img src="{{asset($value['image'])}}" alt="">
                                            </td>
                                            <td>
                                                <a href="{{route('admin.slider.edit',['id'=>$value['id']])}}">Duzenle</a>
                                            </td>

                                            <td class="text-primary">
                                                <a href="{{route('admin.slider.delete',['id'=>$value['id']])}}">Sil</a>
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
