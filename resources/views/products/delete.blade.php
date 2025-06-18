@extends('products.master')
@section('content')

<div class="card">
    <div class="card-header bg-danger text-white">Xác nhận xóa thông tin sản phẩm</div>
    <div class="card-body">
        <form method="post" action="{{ route('products.destroy', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="row mb-3">
                <label for="store_id" class="col-sm-2 col-label-form">Chọn cửa hàng</label>
                <div class="col-sm-10">
                    <select name="store_id" id="store_id" class="form-select" disabled>
                        @foreach ($stores as $store)
                            <option value="{{ $store->id }}" @if ($store->id == $product->store_id) selected @endif>{{ $store->name }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="store_id" value="{{ $product->store_id }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" readonly>
                </div>
            </div>
           
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{ $product->description }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Giá</label>
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control" value="{{ $product->price }}" readonly>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Xóa">
            </div>

        </form>
    </div>
</div>
@endsection('content')