<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
    public function create_page()
    {
        return view('create_page');
    }

    public function store_page(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'tags' => 'string',
        ]);
        $chars = ['[','{', 'value', '"', ':', '}', ']'];
        $tags = str_replace($chars, '', $request->tags); 
        $tags = str_replace(',', ', ', $tags);
        Page::create([
            'user_id' => \Auth::user()->id,
            'title' => $request->title,
            'tags' => $tags,
            'body' => $request->body,
        ]);
        return redirect()->route('home')->withSuccess('Страница успешно добавлена!');
    }

    public function open_page($id)
    {
        $page = Page::where('id', $id)->first();
        return view('open_paje', [
            'page' => $page,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
