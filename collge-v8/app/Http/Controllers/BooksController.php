<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books_student = Books::all();
        return view('Books.books_students', compact('books_student'));
    }

    public function uploade_books(Request $request){

        $this->validate($request,[
            'book_name' => 'required|max:70',
            'book_subject' => 'required|max:100',
            'file' => 'required|mimes:jpeg,png,jpg,gif,docx,pdf,txt,xlsx|max:5048',
        ]);

        $books_student = new Books();
        $books_student->book_name = $request->book_name;
        $books_student->book_subject = $request->book_subject;
        $books_student->cearte_by = Auth::user()->name;

        if($request->hasFile('file')){
            $request->file('file')->move('3ooks_studunt_2/',$request->file('file')->getClientOriginalName());
            $books_student->books  = $request->file('file')->getClientOriginalName();
        }
        $books_student->save();

        // dd($books_student);

        $books_student->update();
        return redirect()->route('books_student')->with('success','Data has been Uplode File successfully');


        // var_dump($user->name);
        // exit;
    }

    public function edit_books(Request $request, $id)
    {
        $edit_books = Books::find($id);
        return view( 'Books.edit_book' ,compact('edit_books'));
    }

    public function update_books(Request $request, $id)
    {
        $this->validate($request,[
            'book_name' => 'required|max:70',
            'book_subject' => 'required|max:100',
            // 'file' => 'required|mimes:jpeg,png,jpg,gif,docx,pdf,txt,xlsx|max:5048',
        ]);

        $update_books = Books::find($id);
        $update_books->book_name = $request->book_name;
        $update_books->book_subject = $request->book_subject;
        $update_books->cearte_by = Auth::user()->name;

        if($request->hasFile('file')){
            $request->file('file')->move('3ooks_studunt_2/',$request->file('file')->getClientOriginalName());
            $update_books->books  = $request->file('file')->getClientOriginalName();
        }
        // $update_books->save();

        // dd($update_books);

        $update_books->update();


        return redirect()->route('books_student')->with('success','Data has been Update File successfully');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        //
    }
    public function delete_Books(Books $files, $id)
    {
        $delete_Books = Books::find($id);
        $delete_Books->delete();
        return redirect()->route('books_student')->with('delete','Data has been registered Delete');
    }
}
