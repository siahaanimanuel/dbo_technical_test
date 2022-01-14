@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Pengumuman Tanggal : {{ $pengumuman['tanggal_buat'] }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('pengumuman/edit_save') }}">
                        {{ csrf_field() }}
                        <!-- ini id kelas yg di hidden untuk proses update -->

                            <input type="hidden" name="id_pengumuman" value="{{$pengumuman['id_pengumuman']}}">


                            <label for="name" class="col-md-4 control-label">Isi Pengumuman</label>

                            <div class="form-group">
                            <div class="col-md-6">
                                 <input id="isi" type="text" class="form-control" name="isi" placeholder='' value="{{$pengumuman['isi']}}">
                            </div>
                            </div>
                            
                        
                          <label for="name" class="col-md-4 control-label">Tanggal</label>

                          <div class="form-group">
                            <div class="col-md-6">
                                <input id="tanggal_buat" type="text" class="form-control" name="tanggal_buat" placeholder='' value="{{$pengumuman['tanggal_buat']}}">
                            </div>
                            </div>

                            

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection