@extends('admin.toolbar')
@section('content')
    @csrf
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Продукты</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('admin-products.create') }}"> Добавить</a>
                </div>
            </div>
            <form action="{{route('products-search')}}" method="post">
                @csrf
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Введите артикул для поиска</h2>
                    </div>
                    <div class="pull-left">
                        <input type="text" name="search" id="search" required placeholder="Введите артикул">
                    </div>
                    <div class="pull-right mb-2">
                        <input type="submit" class="btn btn-success" value="Найти">
                    </div>
                </div>
            </form>

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
                <th>Фото</th>
                <th>Артикул</th>
                <th>Наименование</th>
                <th>Цена</th>
                <th>Производитель</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img width="100" height="100" src="http://5.35.94.70/storage/{{ $item->image_path }}"></td>
                    <td>{{ $item->article ?? 'Отсувствуют данные' }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->producer->name ?? 'Отсувствуют данные' }}</td>
                    <td>
                        <form action="{{ route('admin-products.destroy', $item->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $products->links('pagination::tailwind') !!}
    </div>
@endsection
