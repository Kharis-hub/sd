@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <a href="{{ route('kelas.create')}}" class="btn bg-gradient-info mt-3 w-100"><i class="fas fa-person me-2"></i>Tambah Kelas</a>
    <div class="card mt-2">

        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $key=>$item)
                <tr>
                    <td class="align-middle ">
                      <span class="text-secondary text-xs font-weight-bold">{{ $key+1}}</span>
                    </td>
                    <td class="align-middle">
                        <span class="text-secondary text-xs font-weight-bold"> Kelas {{ $item->kelas}}</span>
                      </td>
                    <td class="align-middle">
                        <a href="{{ route('kelas.show', $item->id) }}" class="text-secondary font-weight-bold mr-2 text-xs text-success" data-toggle="tooltip" data-original-title="Edit user">
                            Lihat
                          </a>
                      <a href="{{ route('kelas.edit', $item->id) }}" class="text-secondary font-weight-bold mr-2 text-xs text-info" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                      <form id="delete_form" action="{{ route('kelas.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <a href="javascript: submitform()" class="text-danger font-weight-bold mr-2 text-xs">Hapus</a>

                    </form>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
</div>
<script type="text/javascript">
    function submitform() {
        let text = "Apakah kamu yakin menghapus kelas ini ?";
        if (confirm(text) == true) {
            document.getElementById('delete_form').submit()
        }

     }
</script>
@endsection
