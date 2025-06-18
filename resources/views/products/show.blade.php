@extends('products.master')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thông tin sản phẩm chi tiết</b></div>
            <div class="col col-md-6">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row mb-4">
            <div class="col-sm-2 col-label-form"><b>Cửa hàng</b></div>
            <div class="col-sm-10">
                {{ $product->store->name }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-2 col-label-form"><b>Tên sản phẩm</b></div>
            <div class="col-sm-10">
                {{ $product->name }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-2 col-label-form"><b>Mô tả</b></div>
            <div class="col-sm-10">
                {{ $product->description }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-2 col-label-form"><b>Giá</b></div>
            <div class="col-sm-10">
                {{ $product->price }}
            </div>
        </div>
        
        <div class="text-center">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>
@endsection('content')