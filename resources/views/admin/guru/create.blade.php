@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <div class="card mt-2 p-4">
        <form action="{{ route("guru.store") }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="nikpip">NIP / NIK</label>
                  <input type="number" class="form-control {{ $errors->has('card_id') ? 'is-invalid' : '' }}" name="card_id" id="nikpip" placeholder="NIP / NIK" value="{{old('card_id')}}">
                    @if($errors->has('card_id'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('card_id') }}
                        </p>
                    @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('card_type') ? 'has-danger' : '' }}">
                    <label for="">Tipe Card</label>
                    <select class="form-select {{ $errors->has('card_type') ? 'is-invalid' : '' }}" name="card_type">
                        <option value="">Pilih</option>
                        <option {{ old('card_type') == 'nik' ? "selected" : "" }} value="nik">NIK</option>
                        <option {{ old('card_type') == 'nip' ? "selected" : "" }} value="nip">NIP</option>
                    </select>
                    @if($errors->has('card_type'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('card_type') }}
                        </p>
                    @endif
                </div>
              </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('nama') ? 'has-danger' : '' }}">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama" id="nama" placeholder="Nama" value="{{old('nama')}}">
                    @if($errors->has('nama'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('nama') }}
                        </p>
                    @endif
                  </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('jekel') ? 'has-danger' : '' }}">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-select {{ $errors->has('jekel') ? 'is-invalid' : '' }}" name="jekel">
                            <option value="">Pilih</option>
                            <option {{ old('jekel') == 'perempuan' ? "selected" : "" }} value="perempuan">Perempuan</option>
                            <option {{ old('jekel') == 'laki-laki' ? "selected" : "" }} value="laki-laki">Laki-laki</option>
                        </select>
                        @if($errors->has('jekel'))
                            <p class="small help-block text-danger">
                                {{ $errors->first('jekel') }}
                            </p>
                        @endif
                    </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-danger' : '' }}">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control {{ $errors->has('tempat_lahir') ? 'is-invalid' : '' }}" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" value="{{old('tempat_lahir')}}">
                        @if($errors->has('tempat_lahir'))
                            <p class="small help-block text-danger">
                                {{ $errors->first('tempat_lahir') }}
                            </p>
                        @endif
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-danger' : '' }}">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                        @if($errors->has('tanggal_lahir'))
                            <p class="small help-block text-danger">
                                {{ $errors->first('tanggal_lahir') }}
                            </p>
                        @endif
                      </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6">


                  <div class="form-group {{ $errors->has('agama') ? 'has-danger' : '' }}">
                    <label for="">Agama</label>
                    <select class="form-select {{ $errors->has('agama') ? 'is-invalid' : '' }}" name="agama">
                        <option value="">Pilih</option>
                        <option {{ old('agama') == 'Islam' ? "selected" : "" }} value="Islam">Islam</option>
                        <option {{ old('agama') == 'Protestan' ? "selected" : "" }} value="Protestan">Protestan</option>
                        <option {{ old('agama') == 'Katholik' ? "selected" : "" }} value="Katholik">Katholik</option>
                        <option {{ old('agama') == 'Budha' ? "selected" : "" }} value="Budha">Budha</option>
                        <option {{ old('agama') == 'Hindu' ? "selected" : "" }} value="Hindu">Hindu</option>
                        <option {{ old('agama') == 'Konghucu' ? "selected" : "" }} value="Konghucu">Konghucu</option>
                    </select>
                    @if($errors->has('agama'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('agama') }}
                        </p>
                    @endif
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" placeholder="Alamat" id="alamat"></textarea>
                  </div>
                </div>

              </div>
            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
          </form>
    </div>
</div>
@endsection
