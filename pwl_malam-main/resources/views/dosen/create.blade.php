<form action="{{ action([App\Http\Controllers\DosenController::class, 'store']) }}" method="post">
    @csrf
    <table>
        <tr>
            <td>NIDN</td><td>:</td><td><input type="text" name="nidn"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td><td>:</td><td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td>Program Studi</td><td>:</td><td><input type="text" name="prodi"></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="Add">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>