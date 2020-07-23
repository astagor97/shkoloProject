<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HyperLinks;

class AddLinkController extends Controller
{
    public function index( Request $request )
    {
        $idCell = explode( "/", $request->path() );

        if ( $request->request->all() )
        {
            $this->addLink( $idCell[1], $request );

            return redirect()->route('home');
        }else
            return view('addHyperLink', [ 'id' => $idCell[1] ]);
    }

    public function addLink( $id, $request )
    {
        $request->validate([
            'title' => 'required|max:255',
            'link'  => 'required|min:10',
            'color' => 'required'
        ]);

        $addHyperlink           = new HyperLinks();
        $addHyperlink->title    = $request->input('title');
        $addHyperlink->link     = $request->input('link');
        $addHyperlink->color    = $request->input('color');
        $addHyperlink->id_cell  = $id;

        $addHyperlink->save();
    }

    public function getByIdLink($id)
    {
        
    }
}
