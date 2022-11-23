<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function showAllAuthors()
    {
        return response()->json(Author::all());
    }

    public function showOneAuthor($id)
    {
        return response()->json(Author::find($id));
    }

    public function create(Request $request)
    {
        /* More validation rules at https://laravel.com/docs/5.8/validation#available-validation-rules */
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:authors',
            'location' => 'required|alpha'
        ]);

        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        
        /* Todo : validate the new values sended into the request */
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully Author '.$id, 200);
    }
}
