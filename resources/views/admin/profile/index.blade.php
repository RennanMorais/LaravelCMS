@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            <h4><i class="icon fas fa-ban"></i>Ocorreu um erro!</h4>
            @foreach ($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('alert'))
    <div class="alert alert-success">
        {{session('alert')}}
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{route('profile.save')}}" method="POST" class="form-horizontal">
            @method('PUT')
            @csrf
        
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Nome Completo</label>
                <div class="col-sm-4">
                    <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror">
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">E-mail</label>
                <div class="col-sm-4">
                    <input type="email" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror">
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Nova Senha</label>
                <div class="col-sm-4">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Confirmar Senha</label>
                <div class="col-sm-4">
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-sm-1 col-form-label"></label>
                <div class="col-sm-4">
                    <input type="submit" value="Salvar" class="btn btn-success">
                </div>
            </div>
        
        </form>
    </div>
</div>

@endsection