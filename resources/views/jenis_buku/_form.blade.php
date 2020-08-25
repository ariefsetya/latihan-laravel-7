{{csrf_field()}}

<div class="form-group">
	<label for="nama">Nama</label>
	<input type="text" class="form-control" id="nama" name="nama" value="{{$jenis_buku->nama ?? ''}}">
</div>
<div class="form-group">
	<label for="deskripsi">Deskripsi</label>
	<textarea type="text" class="form-control" id="deskripsi" name="deskripsi">{{$jenis_buku->deskripsi ?? ''}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>