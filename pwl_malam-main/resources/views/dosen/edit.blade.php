<form action="{{ action([App\Http\Controllers\DosenController::class, 'update'], ['dosen' => $dosen->id]) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>NIDN</td><td>:</td><td><input type="text" name="nidn" value="{{ $dosen->nidn }}"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td><td>:</td><td><input type="text" name="fullname" value="{{ $dosen->fullname }}"></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="Update">
                <input type="button" value="Cancel" onclick="window.location.href='{{ url('dosen') }}'">
            </td>
        </tr>
    </table>
</form>