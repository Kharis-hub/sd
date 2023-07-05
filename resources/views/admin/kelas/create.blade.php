@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <div class="card mt-2 p-4">
        <form action="{{ route("kelas.store") }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('kelas') ? 'has-danger' : '' }}">
                    <label for="kelas">Kelas</label>
                  <input type="number" class="form-control {{ $errors->has('kelas') ? 'is-invalid' : '' }}" name="kelas" id="kelas" placeholder="Kelas" value="{{old('kelas')}}">
                    @if($errors->has('kelas'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('kelas') }}
                        </p>
                    @endif
                </div>
              </div>
            </div>
            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
          </form>
    </div>
</div>
@endsection
