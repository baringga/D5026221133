@extends('kategorimaster')
@section('judulhalaman', 'Kategori')

@section('konten')
    <h4>Pilih Kategori</h4>
    <form action="/hasilcombo" method="GET">
		<select class="custom-select" name="view">
            @foreach($kategori as $k)
            <option value={{ $k->ID }}>{{ $k->Nama }}</option>
            @endforeach
          </select>
		<input type="submit" value="Kirim" class="btn btn-primary">
	</form>

@endsection
