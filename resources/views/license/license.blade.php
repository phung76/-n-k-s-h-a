@extends('admin.index')
@section('title','Quản Lý Chứng Từ')
@section('main')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách chứng từ</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
						<a href="{{asset('license/addlicenses')}}" class="btn btn-primary">Thêm Chứng Từ</a>
							<table class="table table-bordered" style="margin-top:20px;">
								<thead>
									<tr class="bg-primary">

										<th width="30%">Tên Chứng Từ </th>
										<th >nhãn màu</th>
										<th width="20%"> thời gian</th>
										<th>tên Danh mục cha</th>
										<th>trạng thái</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($Licenselist as $license)
									<tr>

									<td>{{ $license->licenses_name}}</td>
                                    <td style="background: {{$license->licenses_color}}">{{$license->licenses_color}}</td>
									<td>{{ $license->storagetime}}</td>
									<td>{{ $license->licenses_partent}}</td>
									<td>{{ $license->licenses_hide}}</td>
										<td>
											<a href="{{asset('license/edit/'.$license->licenses_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a onclick="return confirm('bạn có chắc muốn xóa')" href="{{asset('admin/product/delete/'.$license->license_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
										</td>
									</tr>
									@endforeach


								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
    	</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@endsection
