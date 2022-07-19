@extends('layouts.admin')
@section('title')
<title>Thêm Slider</title>
@endsection
@section('content')
    <div class="content-wrapper">
      @include('includes.admin.content-header', ['name' => 'Category', 'key' => 'Add'])
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{ route('slider.store') }} " method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="link_load">Link_load</label>
                      <input name="link_load" value="{{ old('link_load') }}" type="text" class="form-control" id="link_load" placeholder="nhập link_load">
                      <span class="text-danger">{{ $errors->first('link_load') }}</span>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" id="">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
@endsection
