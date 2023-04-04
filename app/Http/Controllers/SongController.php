<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('term')) {
            $term = $request->get('term');
            $songs = Song::where('title', 'LIKE', "%$term%")->paginate(15)->withQuerystring();
        }else
        $songs = Song::paginate(15);
       return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data= $this->validation($request->all());
    

        $song= new Song;
        $song->fill($data);
        $song->save();

        return redirect()->route('songs.show', $song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
       
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
       return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        

        $data= $this->validation($request->all());
        $song->update($data);
        return redirect()->route('songs.show', $song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validation($data){
        $validator = validator::make(
            $data,
            [
                'title' => 'required|string|max:50',
                'album' => 'string|max:50|nullable',
                'author' => 'required|string|max:50',
                'editor' => 'required|string|max:50',
                'length' => 'required|date_format:H:i:s',
                'poster' => 'string|max:100|nullable'
            ],
            [
                'title.required' => "Il titolo è obbligatorio",
                'title.string' => "Il titolo deve essere una stringa",
                'title.max' => "Il titolo deve avere massimo 50 caratteri",
                'album.string' => "L'album deve essere una stringa",
                'album.max' => "L'album deve avere massimo 50 caratteri",
                'author.string' => "L'autore deve essere una stringa",
                'author.max' => "L'autore deve avere massimo 50 caratteri",
                'author.required' => "L'autore è obbligatorio",
                'editor.required' => "L' editore è obbligatorio",
                'editor.string' => "L'editore deve essere una stringa",
                'editor.max' => "L'editore deve avere massimo 50 caratteri",
                'length.required' => "La durata è obbligatoria",
                'poster.string' => "Il poster deve essere una stringa",
                'poster.max' => "Il poster deve avere massimo 100 caratteri",
                'length.date_format' => "Il formato della durata non corrisponde "
            ]
        )->validate();

        return $validator;
    }
}