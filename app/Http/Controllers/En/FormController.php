<?php

namespace App\Http\Controllers\En;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FormController extends Controller
{
    public function index() 
    {
        return view('admin.posts.index', [
            'forms' => Form::paginate(100)
        ]);
    }

    public function create() 
    {
        return view('admin.forms.create');
    }

    public function download(Form $form) 
    {
        $file = ddd(public_path(). '/' . $form->form);
        $file_name = $form->title."-form";
        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $file_name, $headers);
    }

    public function show(Form $form) {
        return view('admin.forms.index', [
            'form' =>  $form
        ]);
    }

    public function store() 
    {
        Form::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'form' => request()->file('form')->store('forms'),
        ]));

        return redirect('/');
    }

    public function destroy(Form $form)
    {
        $form->delete();

        return back()->with('success', 'Form deleted!');
    }

    protected function validatePost(?Form $form = null): array
    {
        $form ??= new Form();

        return request()->validate([
            'title' => 'required',
            'form' => $form-> exists ? ['image'] : ['required','image'],
            'description' => 'required',
        ]);
    }
}
