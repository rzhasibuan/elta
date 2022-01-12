@extends('admin.templates.default')

@section('style_datatable')
    <link rel="stylesheet" href="{{asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection


@section('content')
    <div class="box">
        <div class="box-header">
        <h5 class="box-title mt-2"><b>List news</b></h5>
    </div>
    <!-- /.box-header -->
        <div class="box-body">
            <a href="{{route('admin.news.create')}}" class="btn btn-primary btn-sm" style="margin-bottom: 10px">
                <i class="fa fa-pencil-square-o"></i> CREATE</button>
            </a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Author</th>
                    <th>Published</th>
                    <th>Action</th>
                </tr>
                </thead>
{{--                <tbody>--}}
{{--                @php--}}
{{--                    $i = 1;--}}
{{--                @endphp--}}
{{--                @foreach($data as $dt)--}}
{{--                    <tr>--}}
{{--                        <td>{{$i++}}</td>--}}
{{--                        <td><a href="{{route('konten.edit',[$dt->id])}}">{{$dt->judul}}</a></td>--}}
{{--                        <td>{{$dt->penulis}}</td>--}}
{{--                        <td>{{$dt->kategori}}</td>--}}
{{--                        <td>{{$dt->created_at}}</td>--}}
{{--                        <td>{{$dt->status}}</td>--}}
{{--                        <td>--}}
{{--                            <form action="{{route('konten.destroy',[$dt->id])}}" class="d-inline" onsubmit="return confirm('Apakah anda ingin menghapus ini secara permanen ?')" method="POST">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="_method" value="DELETE">--}}
{{--                                <button type="submit" class="btn btn-app btn-sm">--}}
{{--                                    <i class="fa fa-trash"></i>--}}
{{--                                </button> <br>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Author</th>
                    <th>Publisshed</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection


@section('js_datatable')

    <script src="{{asset('public/assets/bower_components/bs-notify/bootstrap-notify.min.js')}}"></script>

    <script src="{{asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
