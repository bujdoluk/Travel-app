<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreComment;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function index() {
        return view('/blog', [
            'blogs' => DB::table('blogs')->paginate(6)
        ]);
    }

    public function show($slug) {
        return view('/blog-details', [
            $blog = DB::table('blogs')->where('slug', $slug)->first()
        ])->with('blog', $blog);
    }

    public function store(StoreComment $request) {
        $validated = $request->validated();
        $comment = new Comment();
        $comment->name = $validated['name'];
        $comment->email = $validated['email'];
        $comment->comment = $validated['comment'];
        $comment->save();

        $request->session()->flash('comment', 'You added a new comment. Thanks');

        return redirect('/blogs');
    }
}
