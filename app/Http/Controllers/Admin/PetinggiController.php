<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Petinggi_Model;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class PetinggiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petinggi = Petinggi_Model::all();
        return view('admin.petinggi.index', compact('petinggi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petinggi.add');
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
            'judul_petinggi' => 'required',
            'isi'          => 'required',
            'gambar'          => 'required|file|mimes:jpeg,png,jpg|max:2024',
        ]);

        $slug_petinggi = Str::slug($request->judul_petinggi, '-');
        $gambar = $request->gambar;
        $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->getClientOriginalName();

        $data = $request->all();
        $data['slug_petinggi'] = $slug_petinggi;
        $data['publish'] = date('Ymd');
        $data['gambar'] = 'assets/images/petinggi/' . $new_gambar;

        $gambar->storeAs('assets/images/petinggi/', $new_gambar);

        // echo $data['gambar'];
        // die;
        Petinggi_Model::create($data);



        return redirect('admin/petinggi')->with('success', 'Berhasil menambahkan data petinggi baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Petinggi_Model $id)
    {
        $id = Crypt::decrypt($id);
        $petinggi = $id;
        return view('admin.petinggi.details', compact('petinggi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petinggi = Petinggi_Model::findorfail($id);
        return view('admin.petinggi.edit', compact('petinggi'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petinggi_Model  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petinggi_Model $id)
    {
        $this->validate($request, [
            'judul_petinggi' => 'required',
            'isi'          => 'required',
            'gambar'          => 'required|file|mimes:jpeg,png,jpg|max:2024',
        ]);
    
        $gambar = $request->file('gambar');
    
        if (!empty($gambar)) {
            $data = $request->all();
            $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->getClientOriginalName();
            $data['gambar'] = 'assets/images/petinggi/' . $new_gambar;
            $gambar->storeAs('assets/images/petinggi', $new_gambar);
            // Menggunakan $id_petinggi untuk memperbarui data
            $id->update($data);
        } else {
            $data = $request->all();
            // Menggunakan $id untuk memperbarui data
            $id->update($data);
        }
    
        return redirect()->route('petinggi.index')->with('success', 'Data petinggi berhasil diubah');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\petinggi  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petinggi_Model $id)
    {
        $filename = $id->gambar;
        Storage::disk('public')->delete($filename);
        $id->delete();

        return redirect()->route('petinggi.index')->with('error', 'Data petinggi berhasil dihapus');
    }
}
