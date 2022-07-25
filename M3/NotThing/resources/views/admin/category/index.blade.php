@extends('layouts.admin')
@section('title')
<title>Trang chủ</title>
@endsection

@section('css')
    <link href="{{ asset('vendors\slelect2\select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admins\category\index\index.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
      @include('includes.admin.content-header', ['name' => 'Category', 'key' => 'List'])
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('categories.create') }}" class="btn btn-primary float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @if($categories->count())
                      @foreach ($categories as $category)
                          <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                              <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-primary">Sửa</a>
                              <a href="{{ route('categories.delete', ['id' => $category->id]) }}" class="btn btn-danger">Xóa</a>
                            </td>
                          </tr>
                      @endforeach
                  @else
                      <tr>
                          <th colspan="3" class="text-center">Empty</th>
                      </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              {{ $categories->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection