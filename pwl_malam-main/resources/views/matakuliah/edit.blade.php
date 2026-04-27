<form action="{{ action([App\Http\Controllers\MatakuliahController::class, 'update'], ['matakuliah' => $matakuliah->id]) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Kode MK</td><td>:</td><td><input type="text" name="kode_mk" value="{{ $matakuliah->kode_mk }}"></td>
        </tr>
        <tr>
            <td>Nama Matakuliah</td><td>:</td><td><input type="text" name="nama_mk" value="{{ $matakuliah->nama_mk }}"></td>
        </tr>
        <tr>
            <td>SKS</td><td>:</td><td><input type="number" name="sks" value="{{ $matakuliah->sks }}"></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="Update">
                <input type="button" value="Cancel" onclick="window.location.href='{{ url('matakuliah') }}'">
            </td>
        </tr>
    </table>
</form>