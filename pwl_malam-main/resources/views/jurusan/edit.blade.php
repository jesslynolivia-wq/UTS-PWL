<form action="{{ action([App\Http\Controllers\JurusanController::class, 'update'], ['jurusan' => $jurusan->id]) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama Jurusan</td><td>:</td><td><input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}"></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="Update">
                <input type="button" value="Cancel" onclick="window.location.href='{{ url('jurusan') }}'">
            </td>
        </tr>
    </table>
</form>