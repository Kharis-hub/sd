@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <div class="card mt-2 p-4">
        <form action="{{ route("siswa.store") }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="nis">NIS</label>
                  <input type="number" class="form-control {{ $errors->has('nis') ? 'is-invalid' : '' }}" name="nis" id="nis" placeholder="NIS" value="{{old('nis')}}">
                    @if($errors->has('nis'))
                        <p class="small help-block text-danger">
                            {{ $errors->first('nis') }}
                        </p>
                    @endif
                </div>
              </div>
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
            </div>
            <div class="row">

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
                    <div class="form-group {{ $errors->has('tahun_masuk') ? 'has-danger' : '' }}">
                        <label for="tahun_masuk">Tahun Masuk</label>
                        <input type="number" class="form-control {{ $errors->has('tahun_masuk') ? 'is-invalid' : '' }}" name="tahun_masuk" id="tahun_masuk" placeholder="Tahun Masuk" value="{{old('tahun_masuk')}}">
                        @if($errors->has('tahun_masuk'))
                            <p class="small help-block text-danger">
                                {{ $errors->first('tahun_masuk') }}
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
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('kelas') ? 'has-danger' : '' }}">
                      <label for="">Kelas</label>
                      <select class="form-select {{ $errors->has('kelas') ? 'is-invalid' : '' }}" name="kelas">
                          <option value="">Pilih</option>
                          @foreach ($kelas as $item)
                            <option {{ old('kelas') == $item->kelas ? "selected" : "" }} value="{{ $item->kelas }}">{{ $item->kelas }}</option>
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
            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
          </form>
    </div>
</div>
@endsection
