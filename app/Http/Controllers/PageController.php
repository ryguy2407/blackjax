<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Page::class);
        return view('pages.edit');
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
     * Display the page and populate with child and parent content
     * if it exists.
     *
     * @param $parent
     * @param $child
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($parent = null, $child = null)
    {
        $page = ($child) ? $page = Page::where('id', $child)
                ->orWhere('slug', $child)->firstOrFail() :
            Page::where('id', $parent)
                ->orWhere('slug', $parent)->firstOrFail();

        return view('pages.show')->with([
            'page' => $page
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        $this->authorize('update', $page);
        return view('pages.edit')->with('page', $page);
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
        $page = Page::find($id);
        $this->authorize('update', $page);
        $page->lb_content = $request->get('page');
        $page->save();
        return redirect(route('page.show', $id));
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
}
