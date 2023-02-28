<form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nama" placeholder="Nama" value="{{$mahasiswa->nama}}">
    <input type="text" name="nim" placeholder="Nim" value="{{$mahasiswa->nim}}">
    <input type="text" name="jurusan" placeholder="Jurusan" value="{{$mahasiswa->jurusan}}">
    <button type="submit">SUBMIT</button>



</form>
