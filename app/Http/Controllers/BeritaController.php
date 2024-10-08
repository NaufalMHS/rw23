<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function activity_submit(Request $request) {
        $img = $request->foto;

        if (is_null($img)) {
            $imgname = null;
        } else {
            $imgext = $request->foto->extension();
            $imgname = time().'-'.Berita::generateID().'.'.$imgext;
        }

        $request->merge([
            'url_slug' => Berita::generateSlug($request->judul),
            'sampul' => $imgname,
            'id_berita' => Berita::generateID(),
            'tgl_kirim' => date('Y-m-d'),
            'tgl_update' => date('Y-m-d')
        ]);

        $validated = $request->validate([
            'id_berita' => 'required|unique:berita',
            'judul' => 'required|unique:berita|max:100|min:5',
            'tgl_kirim' => 'required|date',
            'tgl_update' => 'required|date',
            'isi' => 'required',
            'sampul' => 'required',
            'url_slug' => 'required|unique:berita'
        ]);

        $img->move(public_path('/img/information'), $imgname);

        $query = Berita::create($validated);

        if ($query == true) {
            return redirect('/admin-area/agenda-kegiatan')->with('success', 'Berhasil menambahkan berita.');
        } else {
            return redirect('/admin-area/agenda-kegiatan')->with('error', 'Terjadi kesalahan dalam menambahkan berita.');
        }
    }

    public function activity_edit($id) {
        $activity = Berita::where('id_berita', decrypt($id))->get();

        return view('admin.activity_edit', [
            'title' => 'Edit Data Informasi Umum',
            'menu' => 'kegiatan',
            'activity' => $activity,
        ]);
    }

    public function activity_update(Request $request) {
        $img = $request->foto;
        $check = Berita::where('id_berita', '!=', $request->id_kegiatan)->get();

        foreach ($check as $data) {
            if ($data -> judul == $request -> judul) {
                return redirect()->back()->with('error', 'Judul berita tidak boleh sama.');
            }
        }

        if ($img != null) {
            $imgext = $request->foto->extension();
            $imgname = time().'-'.$request -> id_kegiatan.'.'.$imgext;

            $request->merge([
                'url_slug' => Berita::generateSlug($request->judul),
                'sampul' => $imgname,
                'tgl_update' => date('Y-m-d'),
            ]);

            $validated = $request->validate([
                'judul' => 'required',
                'isi' => 'required',
                'sampul' => 'required',
                'url_slug' => 'required',
                'tgl_update' => 'required|date'
            ]);

            Berita::deleteImage($request->id_kegiatan);
            $img->move(public_path('/img/information'), $imgname);

            $query = Berita::where('id_berita', $request -> id_kegiatan)->update($validated);
        } else {
            $request->merge([
                'url_slug' => Berita::generateSlug($request->judul),
                'tgl_update' => date('Y-m-d'),
            ]);

            $validated = $request->validate([
                'judul' => 'required',
                'isi' => 'required',
                'url_slug' => 'required',
                'tgl_update' => 'required|date'
            ]);

            $query = Berita::where('id_berita', $request -> id_kegiatan)->update($validated);
        }

        if ($query == true) {
            return redirect('/admin-area/agenda-kegiatan')->with('success', 'Berhasil mengedit berita.');
        } else {
            return redirect('/admin-area/agenda-kegiatan')->with('error', 'Terjadi kesalahan dalam mengedit berita.');
        }
    }

    public function activity_delete($id) {
        Berita::deleteImage(decrypt($id));
        
        $query = Berita::destroy(decrypt($id));

        if ($query == true) {
            return redirect('/admin-area/agenda-kegiatan')->with('success', 'Berhasil menghapus berita.');
        } else {
            return redirect('/admin-area/agenda-kegiatan')->with('error', 'Terjadi kesalahan dalam menghapus berita.');
        }
    }

    public function activity_search(Request $request) {
        $url = $request->getPathInfo();

        if ($url == '/admin-area/agenda-kegiatan') {
            $request->merge([
                'judul' => '%'.$request->cari.'%',
            ]);
    
            $validated = $request->validate([
                'judul' => 'required',
            ]);
    
            $query = Berita::where('judul', 'like',$validated)->paginate(8);

            if ($query == true) {
                if (count($query) == 0) {
                    return redirect()->back()->with('message', 'Berita tidak ditemukan.');
                } else {
                    return view('admin.activity', [
                        'title' => 'Hasil Pencarian Berita : '.$request->judul,
                        'menu' => 'kegiatan',
                        'activity' => $query,
                    ]);
                }
            } else {
                return redirect()->back()->with('message', 'Terjadi kesalahan dalam pencarian berita.');
            }
        } else {
            $request->merge([
                'judul' => '%'.$request->judul.'%',
            ]);
    
            $validated = $request->validate([
                'judul' => 'required',
            ]);
    
            $query = Berita::where('judul', 'like',$validated)->paginate(8);
            
            if ($query == true) {
                if (count($query) == 0) {
                    return redirect()->back()->with('message', 'Berita tidak ditemukan.');
                } else {
                    return view('main.blog', [
                        'title' => 'Hasil Pencarian Berita : '.$request->judul,
                        'menu' => 'tentang',
                        'blog' => $query,
                    ]);
                }
            } else {
                return redirect()->back()->with('message', 'Terjadi kesalahan dalam pencarian berita.');
            }
        }
    }
}
