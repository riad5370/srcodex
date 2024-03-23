@extends('admin.include.master')
@section('body')
<div class="main-content-inner font">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{route('categories.index')}}">Category</a>
            </li>
            <li class="active">Edit Category Information</li>
        </ul>
    </div>
    <div class="col-12 col-md-12 col-xs-6">
        <div class="widget-box">
            <div class="widget-header">
                <div class="row">
                    <div class="col-md-6 col-6 col-xs-6">
                        <h4 class="widget-title">Category Edit</h4>
                    </div>
                </div>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <form action="{{ route('categories.update',$category->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        {{-- Category name  --}}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name">Category Name:</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{$category->name}}" id="name" placeholder="Category Name" class="col-xs-12 col-md-11 col-sm-12" />
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Icon --}}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="icon">Icon:</label>
                            <div class="col-sm-9">
                                <input type="text" name="icon" value="{{$category->icon}}" id="icon" placeholder="Icon" class="col-xs-12 col-md-11 col-sm-12" />
                                @error('icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-info">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 {{-- live image preview  --}}
 <script>
    function previewImage() {
        var input = document.getElementById('imageInput');
        var previewLabel = document.getElementById('imagePreviewLabel');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                previewLabel.innerHTML = '<img src="' + e.target.result +
                    '" alt="Image Preview" style="max-width:155px;max-height:145px;">';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            previewLabel.innerHTML = '<span class="lbl"> Image Preview</span>';
        }
    }
</script>









@endsection
