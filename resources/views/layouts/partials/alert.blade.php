@if(session()->has('success'))
<div class="container-fluid mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2 text-white"></i></span>
        <span class="alert-text text-white"><strong class="text-white">Success!</strong>  {{ session()->get('success') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

@endif
