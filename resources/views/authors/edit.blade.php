@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                <li><a href="{{ url('/admin/authors') }}">Penulis</a></li>
                <li class="active">Ubah Penulis</li>
</ol>
</nav>
            <div class="card">
                <div class="card-header">Ubah Data Penulis</div>
                <br>
<div class="panel-body">
{!! Form::model($author, ['url' => route('authors.update', $author->id),
'method'=>'put', 'class'=>'form-horizontal']) !!}
@include('authors._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>

@endsection