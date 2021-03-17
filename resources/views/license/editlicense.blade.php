@extends('admin.index')
@section('title',' Quảng Lý Chứng Từ')
@section('main')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản Lý Chứng Từ</h1>
                    </div>
                </div><!--/.row-->

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">

                        <div class="panel panel-primary">
                            <div class="panel-heading">Sử Quản Lý Chứng Từ</div>
                            <div class="panel-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom:40px">
                                        <div class="col-xs-8">
                                            <div class="form-group" >
                                                <label>Tên Quản Lý Chứng Từ</label>
                                            <input required type="text" name="name" class="form-control" value="{{ $license->licenses_name}}">
                                            </div>
                                            <div class="form-group" >
                                                <label>nhãn màu</label>
                                                <input required type="text" name="color" class="form-control" value="{{$license->licenses_color}}">
                                            </div>
                                            <div class="form-group" >
                                                <label>thời gian lưu trữ</label>
                                                <input required type="number" name="storagetime" class="form-control"value="{{ $license->storagetime}}">
                                            </div>
                                            <div class="form-group" >
                                                <label>trạng thái</label><br>
                                                Có: <input type="radio" name="hide" value="1" @if($license->licenses_hide==1) select @endif>
                                                Không: <input type="radio" checked name="featured" value="0" @if($license->licenses_hide==0) select @endif>
                                            </div>
                                            <input type="submit" name="submit" value="cập nhập" class="btn btn-primary">
                                            <a href="{{asset('/license')}}" class="btn btn-danger">Hủy bỏ</a>
                                        </div>
                                    </div>
                                    {{ csrf_field() }}
                                </form>
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
