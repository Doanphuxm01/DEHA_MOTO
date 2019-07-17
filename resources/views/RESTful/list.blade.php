<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khoa Phạm - Quản Lý Học Sinh</title>
    {{-- <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link type="text/css" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
      .btn {padding:0px;font-weight:bold}
    </style>
    <script type="text/javascript">
        function xacnhanxoa(msg) {
            if (window.confirm(msg)) {
                return true;
            }
            return false;
        }
    </script>
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Danh Sách Học Sinh</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>Điểm Toán</th>
                <th>Điểm Lý</th>
                <th>Điểm Hóa</th>
                <th>Xóa</th>
                <th>Sửa</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach($hocsinh as $hs )
              <tr>
                <th scope="row">{{ $hs++ }}</th>
                <td>{{ $hs->hoten }} </td>
                <td>{{ $hs->toan }}</td>
                <td>{{ $hs->ly }} </td>
                <td>{{ $hs->hoa }}</td>
                <th>
                  {!! From::open(array('route'=>array('hocsinh.destroy',$hs->id)),'method'=>'DELETE') !!}
                    <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit" id="delete" class="btn btn-link" {{-- data-id="{{ $value->id }} --}}>Xóa</button>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                  {!! From::close() !!}
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </th>
                <th><a href="#">Sửa</a></th>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ 'assets/admin/js/jquery.min.js' }}"></script>
    <script type="text/javascript" src="{{ 'assets/admin/js/bootstrap.min.js' }}"></script>
  </body>
</html>