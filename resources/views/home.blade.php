@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
<div class="col-md-6 my-3">
    <button class="btn btn-primary">
        <a href="{{route('admin.books')}}" class="text-white">Input buku</a>
    </button>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 text-center">
                    @if($user->roles_id==1)
                    <h4>Anda Login sebagai Admin</h4>
                    @else
                    <h4>Anda Login sebagai User</h4>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@stop