@extends('products.master')

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý sản phẩm</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="col col-md-6"><b></b></div>
        <div class="col col-ma-6">
            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-end">Thêm sản phẩm mới</a>
        </div>
    </div>
</div>

<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Cửa hàng</th>
            <th>Tên sản phẩm</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Thời gian khởi tạo</th>
            <th>Thời gian sửa đổi</th>
            <th>Thao tác</th>
        </tr>
        @if (count($products) > 0)
            @foreach ($products as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->store->name }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ number_format($row->price, 0, ',', '.') }}</td>
                    <td>{{ $row->created_at->format('Y-m-d H:i:s')}}</td>
                    <td>{{ $row->updated_at }}</td>

                    <td>
                        <form method="post" action="{{ route('products.destroy', $row->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('products.show', $row->id) }}" class="btn btn-primary">Xem chi tiết</a>
                            <a href="{{ route('products.edit', $row->id) }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ route('products.delete', $row->id) }}" class="btn btn-danger">Xóa</a>

                        </form>
                    </td>
                </tr>
            
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">No Data Found</td>
            </tr>
        @endif
    </table>
    {!!$products->links() !!}
</div>

@endsection