<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
   public function index()
   {
    return view('backend.pendidikan.index');
   }
   public function create()
   {
    $pendidikan = null;
    return view('backend.pendidikan.create'. compact('pendidikan'));
   }
   public function store(Request $request)
   {
    pendidikan::create($request->all());

    return redirect()->route('pendidikan.index')
                    ->with('success','Data Pendidikan baru telah berhasil disimpan.');
   }
   public function create()
   {
    $pendidikan = null;
    return view('backend.pendidikan.create', compact('pendidikan'));
   }
   public function edit(Pendidikan $pendidikan)
   {
      return view('backend.pendidikan.create'. compact(pendidikan));
   }
   public function update(Requset $request, Pendidikan $pendidikan)
   {
      $pendidikan->update($request->all());

      return redirect()->route('pendidikan.index')
                        ->with('succes','pendidikan berhasil diperbarui.');
   }
   public function destroy(Pendidikan $pendidikan)
   {
      $pendidikan->delete();
      return redirect()->route('pendidikan.index')
                     ->with('success','Data Pendidikan berhasil dihapus');
   }
}
