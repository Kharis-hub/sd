@extends('layouts.admin')
@section('title', 'Profile')
@section('content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../../../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            @if ($user->isAdmin())
                <img src="https://ui-avatars.com/api/?name={{$user->person->nama}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            @elseif ($user->isSiswa())
                 <img src="https://ui-avatars.com/api/?name={{$user->siswa->nama}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            @elseif ($user->isGuru())
                <img src="https://ui-avatars.com/api/?name={{$user->guru->nama}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            @endif

          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
                @if ($user->isAdmin())
                     {{$user->person->nama}}
                @elseif ($user->isSiswa())
                    {{$user->siswa->nama}}
                @elseif ($user->isGuru())
                    {{$user->guru->nama}}
                @endif
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
                @if ($user->isAdmin())
                     {{$user->role->title}}
                @elseif ($user->isSiswa())
                    {{$user->role->title}}
                @elseif ($user->isGuru())
                    {{$user->role->title}}
                @endif
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
