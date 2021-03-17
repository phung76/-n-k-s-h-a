@extends('admin.index')
@section('title',' Danh Mục')
@section('main')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">

						<div class="panel-body">
                            <form action="" method="post">
								<div class="form-group">
                                    <input type="hidden" name="kt" value="0">
									<label>Tên danh mục:</label>
									<input  type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cate->cate_name}}"><br>
									<label>mã danh mục:</label>
									<input  type="text" name="code" class="form-control" placeholder="mã danh mục..."value="{{$cate->cate_code}}"><br>
								</div>


							<div class="fom-group">
                                <input required type="submit" name="submit" value="sưa sản phẩm" class="btn btn-primary btn-sm">
							<a href="{{asset('/category')}}" class="form_control btn btn-danger">hủy bỏ</a>
							</div>
							{{ csrf_field() }}
						</form>
						</div>

					</div>

			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
</div>
</div><!--/.row-->
</div>	<!--/.main-->
    @endsection
