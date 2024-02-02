@extends('admin.toolbar')
@section('content')
    @csrf
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Системы</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('add-system') }}"> Добавить</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Наименование</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($systems as $system)
                <tr>
                    <td>{{ $system->id }}</td>
                    <td>{{ $system->name }}</td>
                    <td>
                        <form action="{{ route('system-delete',['id' => $system->id]) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $systems->links() !!}
    </div>
@endsection
