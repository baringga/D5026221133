@extends('master2')
    @section('title', 'Edit Data Ikan')

    @section('konten')

    <a href="/ikan" class="btn btn-link"> Kembali</a>
    <h3 class="mt-3">Edit Data Ikan</h3>

	@foreach($ikan as $i)
	<form action="/ikan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $i->kodeikan }}"> <br/>
        <div class="form-group row">
            <label for="nama" class="col-xs-3 col-form-label ml-3 mr-3">Nama Ikan</label>
            <div class="col-xs-9 ml-1">
            <input type="text" required="required" class="form-control" id="nama" name="namaikan" value="{{$i->namaikan}}"> <!--name untuk server-->
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlahikan" class="col-xs-3 col-form-label ml-3 mr-2">Jumlah Ikan</label>
            <div class="col-xs-9">
            <input type="text" required="required" class="form-control" id="jumlahikan" name="jumlahikan" value="{{$i->jumlahikan}}"> <!--name untuk server-->
            </div>
        </div>
        <input type="submit" class="btn btn-warning" value="Edit Data">
	</form>
	@endforeach
@endsection
