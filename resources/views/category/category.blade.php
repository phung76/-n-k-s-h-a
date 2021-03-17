@extends('admin.index')
@section('title',' Danh Mục')
@section('main')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
							<form action="" method="post">
								<div class="form-group">
									<label>Tên danh mục:</label>
									<input  type="text" name="name" class="form-control" placeholder="Tên danh mục..."><br>
									<label>mã danh mục:</label>
									<input  type="text" name="code" class="form-control" placeholder="mã danh mục..."><br>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="lưu danh mục" class="btn btn-primary btn-sm">
								</div>
								{{ csrf_field() }}
							</form>

						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
                                      <th>mã danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
									  @foreach ($catelist as $cate)
								<tr>
								<td>{{$cate->cate_name}}</td>
                                <td>{{$cate->cate_code}}</td>
									<td>
			                    		<a href="{{asset('category/edit/'.$cate->cate_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('category/delete/'.$cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
								  @endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
	    </div>
	</div>
</div><!--/.row-->

</div>
</div><!--/.row-->


@endsection
