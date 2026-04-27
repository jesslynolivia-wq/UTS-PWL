<form action="{{ action([App\Http\Controllers\JurusanController::class, 'store']) }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Nama Jurusan</td><td>:</td><td><input type="text" name="nama_jurusan"></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="Add">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>