@extends('layouts.admin')
@section('title')
<title>Sản phẩm</title>
@endsection
@section('content')
    <div class="content-wrapper">
      @include('partials.admin.content-header', ['name' => 'Product', 'key' => 'List'])
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('product.create') }}" class="btn btn-primary float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá Gốc</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                      <tr>
                        <td> {{ $product->id }} </td>
                        <td> {{ $product->name }} </td>
                        <td> {{ $product->price }} </td>
                        <td> {{ $product->discount_price }} </td>
                        <td> <img src="{{ asset($product->feature_image_path) }}" alt=""> </td>
                        <td> {{ $product->category_id }} </td>
                        <td>
                            <a href="" class="btn btn-primary">Sửa</a>
                            <a href="" class="btn btn-danger">Xóa</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              {{ $products->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection