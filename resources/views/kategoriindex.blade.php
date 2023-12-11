@extends('kategorimaster')
 @section('title', 'Database kategori')

 @section('judul_halaman')
     <h2>Data Kategori</h2>


     <br>
 @endsection

 @section('konten')
     <br>
     <select name=" optionlist " onChange="combo(this, 'demo')">
        <option> @foreach ($kategori as $i)
            <tr>
                <td>{{ $i ->Nama}}</td>

            </tr>
        @endforeach</option>
        <option> @foreach ($kategori as $i)
            <tr>
                <td>{{ $i ->Nama}}</td>

            </tr>
        @endforeach</option>
        <option> @foreach ($kategori as $i)
            <tr>
                <td>{{ $i ->Nama}}</td>

            </tr>
        @endforeach</option>
        </select>


     <table class="table table-striped table-hover">
         <tr>
            <th>ID</th>
             <th>Nama Kategori</th>


         </tr>
         @foreach ($kategori as $i)
             <tr>
                 <td>{{ $i ->ID}}</td>
                 <td>{{ $i ->Nama}}</td>

             </tr>
         @endforeach
     </table>
 @endsection
