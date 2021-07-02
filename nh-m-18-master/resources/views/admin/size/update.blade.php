@extends('master.index')
@section('main')
<style>
	.form-control{
		margin-top: 10px;
	}
	.label-default {
		font-family: 'Poppins','sans-serif';
		font-size: 12px;
	}
	.status{
		padding: 15px;
	}
</style>
<!-- Form Thêm Mới Sản Phẩm -->

<div class="container">
	<form action="{{ route('size.update',['size'=>$sizes->sizes_id]) }}" method="POST" role="form">
    @csrf
    @method('PUT')
  <div class="form-row">
    <div class="form-group col-lg-7 @error('sizes_name') has-error  @enderror">
    	<label class="label label-default px">Tên Kích Cỡ:</label>
        @if(Session::has('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thành công: </strong>  {{Session::get('success')}} <br>
          </div>
          @endif
          @if(Session::has('error'))
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Lỗi: </strong>  {{Session::get('error')}} <br>
          </div>
          @endif 
      <input type="text" class="form-control" name="sizes_name" value="{{$sizes->sizes_name}}"  placeholder="Nhập Tên Kích Cỡ">
      @error('categories_name')
      <small class="help-block">{{$message}}</small>
      @enderror
    </div>

	  <div class="form-group col-lg-6 status">
 
 
      <button type="submit" class="btn btn-primary ">Sửa</button>
    </div>
   
</div>

</form>
</div>


@stop()