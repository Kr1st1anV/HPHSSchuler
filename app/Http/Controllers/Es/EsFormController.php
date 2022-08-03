<?php

namespace App\Http\Controllers\Es;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class EsFormController extends Controller
{
    public function index() 
    {
        return view('es.admin.posts.index', [
            'forms' => Form::paginate(100)
        ]);
    }

    public function create() 
    {
        return view('es.admin.forms.create');
    }

    public function show(Form $form) {
        return view('es.admin.forms.index', [
            'form' =>  $form
        ]);
    }

    public function store() 
    {
        Form::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'form' => request()->file('form')->store('forms'),
        ]));

        return redirect('/es');
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
