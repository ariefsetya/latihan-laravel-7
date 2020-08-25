@extends('layouts')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Ubah Jenis Buku</h6>
			</div>
			<div class="card-body">
				<form method="POST" action="{{route('jenis_buku_perbarui',[$jenis_buku->id])}}" enctype="multipart/form-data">
					@include('jenis_buku._form')
				</form>
			</div>
		</div>
	</div>
</div>

@endsection