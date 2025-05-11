@extends('admin.layouts.master')

@section('content')
    <h1 class="me-3">Salam,{{ Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : 'Qonaq' }}
    </h1>
@endsection
