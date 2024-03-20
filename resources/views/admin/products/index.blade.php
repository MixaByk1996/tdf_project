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
                        <input type="text" name="search" id="search" class="form-control" required placeholder="Введите артикул">
                    </div>
                    <div class="pull-right mb-2">
                        <input type="submit" class="btn btn-success" value="Найти">
                    </div>
                </div>
            </form>
            <div class="container mt-5">
                <h2>Загрузить файл</h2>
                <form action="{{ route('upload-file-excel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Загрузить</button>
                </form>
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
                <th>Фото</th>
                <th>Артикул</th>
                <th>Наименование</th>
                <th>Модель</th>
                <th>Цена</th>
                <th>Валюта</th>
                <th>Производитель</th>
                <th>Опт ТДФ</th>
                <th>ТД розница</th>
                <th>Вес</th>
                <th>Штрихкод</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img width="100" height="100" src="http://tdfurnitur.com/storage/{{ $item->image_path }}"></td>
                    <td>{{ $item->article ?? 'Отсувствуют данные' }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->currency }}</td>
                    <td>{{ $item->producer->name ?? 'Отсувствуют данные' }}</td>
                    <td>{{ $item->tdf }}</td>
                    <td>{{ $item->tdf_ros }}</td>
                    <td>{{ $item->ves }}</td>
                    <td>{{ $item->barcode }}</td>
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
