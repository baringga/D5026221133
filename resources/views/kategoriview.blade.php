@extends('kategorimaster')
 @section('title', 'view data kategori')

 @section('konten')

     <h3 class="d-flex justify-content-center">Data kategori</h3>

     <div class="row">
         <div class="col-6"></div>
         <div class="col-6 flex-column mt-5 mb-5">
             @foreach ($kategori as $i)
                 <div name="ID" id="ID" class="mb-2">Nama: {{ $i->ID }} </div>
                 <div name="namakategori" id="nama" class="mb-2">Jumlah: {{ $i->namakategori }} </div>
                 @endif

             @endforeach
         </div>
     </div>

 @endsection
