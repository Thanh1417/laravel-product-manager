@extends('products.master')
@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-header">Thêm mới sản phẩm</div>
    <div class="card-body">
        <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="store_id" class="col-sm-2 col-label-form">Chọn cửa hàng</label>
                <div class="col-sm-10">
                    <select name="store_id" id="store_id" class="form-select" required>
                        @foreach ($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Giá</label>
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control">
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Thêm">
            </div>

        </form>
    </div>
</div>
@endsection('content')