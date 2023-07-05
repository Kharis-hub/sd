@extends('layouts.admin')
@section('title', $title)
@section('content')
<div class="container-fluid">
    <div class="card mt-2">

        <div class="table-responsive">
            <form action="{{ route("kelas.naik") }}" method="POST">
                @csrf
                <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-center"><input type="checkbox" id="checkAll"></th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                        <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIS</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                        <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $key=>$item)
                        <tr>
                            <td class="align-middle text-center">
                                <input type="checkbox" name="naik[]" value="{{ $item->id}} " checked>
                            </td>
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

                          </tr>
                        @endforeach


                    </tbody>
                  </table>
                  <div class="d-flex justify-content-end p-3">
                    @if ($siswa->count() > 0)
                        <button type="submit" class="btn bg-gradient-secondary">Naik Kelas</button>
                    @endif
                  </div>

            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#checkAll").click(function () {
                    $('input:checkbox').not(this).prop('checked', this.checked);
                });
    function submitform() {
        let text = "Apakah kamu yakin menghapus kelas ini ?";
        if (confirm(text) == true) {
            document.getElementById('delete_form').submit()
        }

     }
</script>
@endsection
