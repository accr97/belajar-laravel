@extends('layouts.master')
@section('content')
<h1> LIST MAHASISWA GUNADARMA</h1>


<button>
    <a href="{{route('mahasiswa.create')}}" >Tambah Data </a>
</button>

<table style="border: 1px solid black" >
<tr>
<td>Nomor</td>
    <td style="color: #0a58ca"> Nama</td>
    <td> Nim </td>
    <td> Jurusan </td>
    <td> Edit </td>
</tr>
    @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{$mhs->id}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>
                <button> <a href="{{route('mahasiswa.edit', $mhs->id)}}"> Edit </a> </button>
                <form action="{{route('mahasiswa.destroy', $mhs->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
            </td>



        </tr>
    @endforeach
</table>

    @stop


