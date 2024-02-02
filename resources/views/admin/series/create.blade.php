@extends('admin.toolbar')
@section('content')
    @csrf
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Добавить серию</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('series.index') }}"> Назад</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{route('series.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Наименование серии:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Название" required>
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Добавить</button>
            </div>
        </form>
    </div>
@endsection
