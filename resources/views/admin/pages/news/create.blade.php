@extends('admin.templates.default')

@section('style_datatable')
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">

@endsection


@section('content')
    <div class="box box-primary">
    {{-- <div class="box-header with-border">
        <h3 class="box-title">TULIS BERITA BARU</h3>
    </div> --}}
    <!-- /.box-header -->
        <!-- form start -->
        <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="judul">JUDUL BERITA</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukkan judul berita" name="judul" value="{{old('judul')}}">
                    <div class="has-error">
                    <span class="help-block">
                        {{$errors->first('judul')}}
                    </span>
                    </div>
                </div>

                <div class="form-group">
                    <label>KATEGORI</label>
                    <select class="form-control select2" style="width: 100%;" name="kategori">
                        <option selected disabled>PILIH KETEGORI</option>
                        <option value="berita">berita</option>
                        <option value="tentang">tentang</option>
                    </select>
                    <div class="has-error">
                    <span class="help-block">
                        {{$errors->first('kategori')}}
                    </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar berita</label>
                    <input type="file" id="gambar" name="gambar">
                    {{-- <p class="help-block">Example block-level help text here.</p> --}}
                    <div class="has-error">
                    <span class="help-block">
                        {{$errors->first('gambar')}}
                    </span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="isi">ISI BERITA</label>
                    <textarea name="isi" id="isi" cols="30" rows="10">{{old('isi')}}</textarea>
                    <div class="has-error">
                    <span class="help-block">
                        {{$errors->first('isi')}}
                    </span>
                    </div>
                </div>

                <div class="form-group">
                    <label>STATUS</label>
                    <select class="form-control select2" style="width: 100%;" name="status">
                        <option selected disabled>PILIH STATUS</option>
                        <option value="active">active</option>
                        <option value="nonactive">nonactive</option>
                    </select>
                    <div class="has-error">
                    <span class="help-block">
                        {{$errors->first('status')}}
                    </span>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">BUAT</button>
                    <a href="{{route('admin.news.index')}}" class="btn btn-danger">BATAL</a>
                </div>
        </form>
    </div>
@endsection


@section('js_datatable')
    <script src="{{asset('assets/bower_components/bs-notify/bootstrap-notify.min.js')}}"></script>

    <!-- CK Editor -->
    <script src="{{asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('isi',{
                filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod : 'form',
            })
        })

        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endsection
