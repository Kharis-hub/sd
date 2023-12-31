@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <a href="{{ route('mapel.create')}}" class="btn bg-gradient-info mt-3 w-100"><i class="fas fa-person me-2"></i>Tambah Mata Pelajaran</a>
    <div class="card mt-2">

        <div class="table-responsive">
          <table class="table align-items-center mb-0 ytable">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Mata Pelajaran</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                <th class=" text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">KKM</th>
                <th class=" text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mapel as $key=>$item)
                <tr data-entry-id="{{ $item->id }}">
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $item->id}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $item->nama}}</span>
                      </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $item->kelas}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $item->kkm ?? '-'}}</span>
                      </td>
                    <td class="align-middle text-center">
                        <a href="{{ route('mapel.edit', $item->id) }}" class="btn btn-sm bg-gradient-info" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <form id="delete_form" action="{{ route('mapel.destroy', $item->id) }}" method="POST" style="display: inline-block;">
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

          <div class="d-flex justify-content-end">
            {{$mapel->links()}}
         </div>
        </div>

      </div>
</div>
@endsection
