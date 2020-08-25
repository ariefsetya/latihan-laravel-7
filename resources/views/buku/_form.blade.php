{{csrf_field()}}

<div class="form-group">
	<label for="jenis_buku_id">Jenis</label>
	<select type="text" class="form-control" id="jenis_buku_id" name="jenis_buku_id">
		@foreach($jenis_buku as $row)
		<option value="{{$row->id}}" @if(($buku->jenis_buku_id ?? 0) == $row->id) selected @endif>{{$row->nama}}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<label for="judul">Judul</label>
	<input type="text" class="form-control" id="judul" name="judul" value="{{$buku->judul ?? ''}}">
</div>
<div class="form-group">
	<label for="penulis">Penulis</label>
	<input type="text" class="form-control" id="penulis" name="penulis" value="{{$buku->penulis ?? ''}}">
</div>
<div class="form-group">
	<label for="penerbit">Penerbit</label>
	<input type="text" class="form-control" id="penerbit" name="penerbit" value="{{$buku->penerbit ?? ''}}">
</div>
<div class="form-group">
	<label for="tahun">Tahun</label>
	<input type="text" class="form-control" id="tahun" name="tahun" value="{{$buku->tahun ?? ''}}">
</div>
<button type="submit" class="btn btn-primary">Submit</button>