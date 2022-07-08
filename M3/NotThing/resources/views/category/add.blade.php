@extends('layouts.admin')
@section('title')
<title>Trang chủ</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.admin.content-header', ['name' => 'Category', 'key' => 'Add'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                      <label for="name_category">Tên danh mục</label>
                      <input type="email" class="form-control" id="name_category" placeholder="nhập tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="category_parent">Chọn danh mục cha</label>
                        <select class="form-control" id="category_parent">
                            <option value="0">Chọn danh mục cha</option>
                            {!! $option !!}
                          </select>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
