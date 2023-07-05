@extends('layouts.main_login')

@section('container')
    {{-- <div class="container"> --}}

    <!-- Outer Row -->
    <div class="row">

        <div class="col-lg" style="padding-top: 60px;">

            <div class="card o-hidden border-0 shadow-lg my-5 mx-auto" data-aos="zoom-in-down" data-aos-easing="linear"
                data-aos-duration="500" style="border-radius: 35px;">
                <div class="card-body p-4">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-12 col-xl-6 col-lg d-none d-lg-block">
                            <img src="{{ url('/img/bg_login.png')}}" class="img-fluid img-responsive" width="540px">
                        </div>
                        <div class="col col-xl-5 col-lg-5"
                            style="display: grid; align-items: center; align-content: center;">
                            <div class="text-center">
                                <h3 class="font-weight-bolder text-info text-gradient"><b>Selamat Datang Di SADAR
                                        SI-ON</b></h3>
                                <h5 class="text-secondary mb-4"><b>S</b>ekol<b>a</b>h <b>Da</b>sa<b>r</b> <b>Si</b>nau
                                    <b>On</b>line
                                </h5>
                            </div>

                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show text-light text-bold text-center"
                                    role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close btn-white text-white" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif


                            <form class="user" method="POST" action="{{ route("auth.login") }}">
                                @csrf {{--  Pengamanan --}}
                                <div class="alert alert-info text-white text-center bg p-2" role="alert">
                                    <b>NIP</b> = Untuk Guru, <b>NIS</b> = Untuk Siswa, <b>NIK</b> = Untuk Guru Tidak
                                    Tetap
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        @error('username') is-invalid @enderror id="username" name="username"
                                        placeholder="Masukkan NIP / NISN / NIK" value="{{ old('username') }}" autofocus
                                        required>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="alert alert-info text-white text-center bg p-2" role="alert">
                                    <b>Password</b>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password"
                                        name="password" placeholder="Password....." required>
                                    {{-- <= form_error('password', '<small class="text-danger pl-3">' , '</small>' ) ?> --}}
                                </div>
                                <button type="submit" class="btn bg-gradient-info btn-user btn-block">
                                    <b>
                                        Login
                                    </b>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    {{-- </div> --}}
@endsection
