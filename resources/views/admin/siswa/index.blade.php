@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <a href="{{ route('siswa.create')}}" class="btn bg-gradient-info mt-3 w-100"><i class="fas fa-person me-2"></i>Tambah Siswa</a>
    <div class="card mt-2">

        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIS</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $key=>$item)
                <tr>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $item->id}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $item->nis}}</span>
                      </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $item->nama}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $item->alamat}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $item->kelas}}</span>
                      </td>
                    <td class="align-middle">
                      <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                        <form id="delete_siswa" action="{{ route('siswa.destroy', $item->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin hapus data ini ?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-sm bg-gradient-danger">Hapus
                            </button>

                        </form>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
