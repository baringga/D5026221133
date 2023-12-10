@extends('master2')
 @section('konten')
     <h3>Data Ikan</h3>

     <a href="/ikan"> Kembali</a>

     <br />
     <br />

     <form action="/ikan/store" method="post" class="form-horizontal" role="form">
         {{ csrf_field() }}
         <div class = "form-group">
             <label for = "namaikan" class = "col-sm-2 control-label">Nama Ikan</label>
             <div class = "col-sm-10">
                 <input required="required" name="namaikan" type = "text" class = "form-control" id = "namaikan"
                     placeholder = "Masukan Nama Ikan..">
             </div>
         </div>
         <div class = "form-group">
             <label for = "jumlahikan" class = "col-sm-2 control-label">Jumlah Ikan</label>
             <div class = "col-sm-10">
                 <input required="required" name="jumlahikan" type = "number" class = "form-control" id = "jumlahikan"
                     placeholder = "Masukan Jumlah Ikan ..">
             </div>
         </div>
         <input type="submit" value="Simpan Data" class="btn btn-primary">
     </form>
 @endsection
