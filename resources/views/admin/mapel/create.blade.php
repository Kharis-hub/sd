@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <div class="card mt-2 p-4">
        <form action="{{ route("mapel.store") }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama Mata Pelajaran</label>
                  <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama" id="nama" placeholder="Nama Mata Pelajaran" value="{{old('nama')}}">
                    @if($errors->has('nama'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('nama') }}
                        </p>
                    @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('kelas') ? 'has-danger' : '' }}">
                    <label for="">Kelas</label>
                    <select class="form-select {{ $errors->has('kelas') ? 'is-invalid' : '' }}" name="kelas">
                        @foreach ($kelas as $item)
                          <option {{ old('kelas') == $item->kelas ? "selected" : "" }} value="{{$item->kelas}}">{{$item->kelas}}</option>
                        @endforeach

                    </select>
                    @if($errors->has('kelas'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('kelas') }}
                        </p>
                    @endif
                </div>
              </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('kkm') ? 'has-danger' : '' }}">
                    <label for="kkm">KKM</label>
                    <input type="number" class="form-control {{ $errors->has('kkm') ? 'is-invalid' : '' }}" name="kkm" id="kkm" placeholder="kkm" value="{{old('kkm')}}">
                    @if($errors->has('kkm'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('kkm') }}
                        </p>
                    @endif
                  </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('jekel') ? 'has-danger' : '' }}">
                        <label for="">Guru Mapel</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="guru_mapel"  value="1">
                        </div>
                    </div>
                </div>

              </div>
            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
          </form>
    </div>
</div>
@endsection
