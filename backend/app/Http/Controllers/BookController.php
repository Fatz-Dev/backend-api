<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::with(['author', 'publisher'])->get(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
            'isbn' => 'required|unique:books,isbn',
            'tahun_terbit' => 'required|integer',
            'kategori' => 'required',
            'jumlah_stok' => 'required|integer',
        ]);

        $book = Book::create($request->all());
        return response()->json([
            'message' => 'Data buku berhasil ditambahkan',
            'data' => $book
        ], 201);
    }

    public function show($id)
    {
        $book = Book::with(['author', 'publisher'])->find($id);
        if (!$book) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($book, 200);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required',
            'author_id' => 'sometimes|required|exists:authors,id',
            'publisher_id' => 'sometimes|required|exists:publishers,id',
            'isbn' => 'sometimes|required|unique:books,isbn,' . $id,
            'tahun_terbit' => 'sometimes|required|integer',
            'kategori' => 'sometimes|required',
            'jumlah_stok' => 'sometimes|required|integer',
        ]);

        $book->update($request->all());
        return response()->json([
            'message' => 'Data buku berhasil diupdate',
            'data' => $book
        ], 200);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $book->delete();
        return response()->json([
            'message' => 'Data buku berhasil dihapus',
        ], 200);
    }
}
