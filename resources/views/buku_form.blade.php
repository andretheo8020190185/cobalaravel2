@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$nama_tombol}} BUKU</div>

                <div class="card-body">
                    {!! Form::model($objek, ['action' =>$action,'method' => $method]) !!}
                        <div class="form group">
                            <label for="judul">JUDUL</label>
                            {!! Form::text('judul', null, ['class'=>'form-control']) !!}
                            <span class="text-helper">{{$errors->first('judul')}}</span>
                        </div>
                        <br>
                        <div class="form group">
                            <label for="pengarang">PENGARANG</label>
                            {!! Form::text('pengarang', null, ['class'=>'form-control']) !!}
                            <span class="text-helper">{{$errors->first('pengarang')}}</span>
                        </div>
                        <br>
                        {!! Form::submit($nama_tombol, ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
