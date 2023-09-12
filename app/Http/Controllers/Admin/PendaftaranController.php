<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pendaftaran_Model;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran_Model::all();
        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pendaftaran.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_pendaftaran' => 'required',
            'isi'          => 'required',
            'gambar'          => 'required|file|mimes:jpeg,png,jpg|max:2024',
        ]);

        $slug_pendaftaran = Str::slug($request->judul_pendaftaran, '-');
        $gambar = $request->gambar;
        $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->getClientOriginalName();

        $data = $request->all();
        $data['slug_pendaftaran'] = $slug_pendaftaran;
        $data['publish'] = date('Ymd');
        $data['gambar'] = 'assets/images/pendaftaran/' . $new_gambar;

        $gambar->storeAs('assets/images/pendaftaran/', $new_gambar);

        // echo $data['gambar'];
        // die;
        Pendaftaran_Model::create($data);



        return redirect('admin/pendaftaran')->with('success', 'Berhasil menambahkan data pendaftaran baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran_Model $id)
    {
        $id = Crypt::decrypt($id);
        $pendaftaran = $id;
        return view('admin.pendaftaran.details', compact('pendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($slug_pendaftaran)
    {
        // $id = Crypt::decrypt($id);
        $pendaftaran = Pendaftaran_Model::where('slug_pendaftaran', $slug_pendaftaran)->first();
        // dd($pendaftaran);
        return view('admin.pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftaran  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran_Model $id)
    {
        $this->validate($request, [
            'judul_pendaftaran' => 'required',
            'isi_pendaftaran'   => 'required',
            'gambar'          => 'required|file|mimes:jpeg,png,jpg|max:2024',
        ]);


        // $id_berita = Pendaftaran_Model::findorfail($id);
        $gambar = $request->file('gambar');

        if (!empty($gambar)) {
            $data = $request->all();
            $gambar = $request->file('gambar');
            $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();
            $data['gambar'] = 'assets/images/pendaftaran/' . $new_gambar;
            $gambar->storeAs('assets/images/pendaftaran', $new_gambar);
            $id->update($data);
            $id->update($data);
        } else {
            $data = $request->all();
            $id->update($data);
        }

        return redirect()->route('pendaftaran.index')->with('success', 'Data pendaftaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftaran  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran_Model $id)
    {
        $filename = $id->gambar;
        Storage::disk('public')->delete($filename);
        $id->delete();

        return redirect()->route('pendaftaran.index')->with('error', 'Data pendaftaran berhasil dihapus');
    }
}