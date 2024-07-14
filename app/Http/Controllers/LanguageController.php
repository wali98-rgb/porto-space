<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPSTORM_META\map;
use function PHPUnit\Framework\isEmpty;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();

        if ($languages->isEmpty()) {
            $language = Language::all();
        } else {
            $language = Language::first()->paginate(10);
        }

        // $language = Language::first()->paginate(10);

        // Algoritma untuk alert hapus data
        $title = 'Hapus Bahasa';
        $text = "Anda yakin ingin mengahpusnya?";
        confirmDelete($title, $text);

        return view('admin.languages.index', compact('language'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_lang' => 'required|min:1',
            'slug_lang' => 'required'
        ]);

        Language::create([
            'name_lang' => $request->name_lang,
            'slug_lang' => $request->slug_lang
        ]);

        Alert::toast('Berhasil menambahkan bahasa.', 'success');
        return redirect()->route('language.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_lang' => 'required|min:1',
            'slug_lang' => 'required'
        ]);

        $language = Language::findOrFail($id);

        $language->update([
            'name_lang' => $request->name_lang,
            'slug_lang' => $request->slug_lang
        ]);

        Alert::toast('Berhasil mengubah bahasa.', 'success');
        return redirect()->route('language.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();

        Alert::success('Berhasil', 'Bahasa berhasil dihapus.');
        return back();
    }
}
