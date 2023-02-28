<form action="{{route('mahasiswa.store')}}" method="post">
    @csrf
    <input type="text" name="nama" placeholder="Nama">
    <input type="text" name="nim" placeholder="Nim">
    <input type="text" name="jurusan" placeholder="Jurusan">
    <button type="submit">SUBMIT</button>



</form>
