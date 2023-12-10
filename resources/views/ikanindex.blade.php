@extends('master2')
 @section('title', 'Database ikan')

 @section('judul_halaman')
     <h2>Data Ikan</h2>


     <br>
 @endsection

 @section('konten')
     <br>
     <a href="/ikan/tambah" class="btn btn-primary"> + Tambah Ikan Baru</a>
     <table class="table table-striped table-hover">
         <tr>
             <th>Nama Ikan</th>
             <th>Jumlah Ikan</th>
             <th>Tersedia</th>
             <th>Opsi</th>
         </tr>
         @foreach ($ikan as $i)
             <tr>
                 <td>{{ $i ->namaikan}}</td>
                 <td>{{ $i ->jumlahikan}}</td>

                 <td>
                     @if ($i->tersedia == 0) Tidak Tersedia
                     @elseif ($i->tersedia == 1) Tersedia
                     @endif
                 </td>
                 <td>
                    <a href="/ikan/view/{{ $i->kodeikan }}" class="btn btn-success">View</a>
                    |
                    <a href="/ikan/edit/{{ $i->kodeikan }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/ikan/hapus/{{ $i->kodeikan }}" class="btn btn-danger">Hapus</a>
                </td>

             </tr>
         @endforeach
     </table>
 @endsection
