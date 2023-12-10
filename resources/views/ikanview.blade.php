@extends('master2')
 @section('title', 'view data ikan')

 @section('konten')

     <h3 class="d-flex justify-content-center">Data Ikan</h3>

     <div class="row">
         <div class="col-6"></div>
         <div class="col-6 flex-column mt-5 mb-5">
             @foreach ($ikan as $i)
                 <div name="namaikan" id="nama" class="mb-2">Nama: {{ $i->namaikan }} </div>
                 <div name="jumlahikan" id="jumlah" class="mb-2">Jumlah: {{ $i->jumlahikan }} </div>
                 @if ($l->tersedia == 0) Tidak Tersedia
                 @elseif ($l->tersedia == 1) Tersedia
                 @endif
                <div class="d-flex justify-content-center">
                 <a href="/ikan" class="btn btn-primary pl-5 pr-5 mt-5">OK</a>
                 </div>
             @endforeach
         </div>
     </div>

 @endsection
