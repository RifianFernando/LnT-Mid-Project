<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\bookrequest;

class createbook extends Controller
{
    public function createBook(bookrequest $request){
        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'jumlahhalaman' => $request->jumlahhalaman,
            'terbit' => $request->terbit,
        ]);

        return redirect(route('listbook'));
    }

    public function listbook(){
        $books=Book::all();

        return view('listbook', ['books' => $books]);

    }

    //return view halaman buku
    public function vieweditbook($id){
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

    //proses update
    public function editbook(bookrequest $request, $id){
        $book = Book::find($id);

        $book -> update([
            'judul' =>$request->judul,
            'penulis' => $request->penulis,
            'jumlahhalaman' => $request->jumlahhalaman,
            'terbit' => $request->terbit,
        ]);
        return redirect(route('listbook'));
    }

    //delete book
    public function deletebook($id){
        Book::destroy($id);
        //dd($id);
        return redirect(route('listbook'));
    }
}
