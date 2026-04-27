<form action="{{ action([App\Http\Controllers\MatakuliahController::class, 'store']) }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Kode Matakuliah</td><td>:</td><td><input type="text" name="kode_mk"></td>
        </tr>
        <tr>
            <td>Nama Matakuliah</td><td>:</td><td><input type="text" name="nama_mk"></td>
        </tr>
        <tr>
            <td>SKS</td><td>:</td><td><input type="number" name="sks"></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="Add">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>