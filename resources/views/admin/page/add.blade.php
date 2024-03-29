@extends('layouts.admin')

@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm trang
            </div>
            <div class="card-body">
                <form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề trang</label>
                        <input class="form-control" type="text" name="title" id="title">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="slug">Slug</label>
                        <input class="form-control" type="text" name="slug" id="slug">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="content">Nội dung trang</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="pending" value="1" checked>
                            <label class="form-check-label" for="pending">
                                Chờ duyệt
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="public" value="2">
                            <label class="form-check-label" for="public">
                                Công khai
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn_add_page" value='Thêm mới'>Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
