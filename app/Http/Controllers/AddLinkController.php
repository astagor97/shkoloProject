<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HyperLinks;

class AddLinkController extends Controller
{
    public function index( Request $request, $id = null )
    {
        $idCell = explode( "/", $request->path() );

        switch ( $idCell[0] )
        {
            case 'add':
                return $this->addLink($id, $request);
                break;
            case 'edit':
                return $this->editlink($id, $request);
                break;
            default:
                return '404 Page Not Found';
        }
    }

    public function addLink( $id, $request )
    {
        if ( $request->request->all() )
        {
            $this->validateLink( $request );

            $addHyperlink           = new HyperLinks();
            $addHyperlink->title    = $request->input('title');
            $addHyperlink->link     = $request->input('link');
            $addHyperlink->color    = $request->input('color');
            $addHyperlink->id_cell  = $id;

            $addHyperlink->save();

            return redirect()->route('home');
        }else
            return view('addHyperLink', [ 'id' => $id ]);
    }

    public function editlink( $id, $request )
    {
        $data = $this->getByIdLink($id);

        if ( $request->request->all() )
        {
            $this->validateLink( $request );

            $addHyperlink           = HyperLinks::find( $id );
            $addHyperlink->title    = $request->input('title');
            $addHyperlink->link     = $request->input('link');
            $addHyperlink->color    = $request->input('color');

            $addHyperlink->save();

            return redirect()->route('home');
        }else
            return view('editHyperLink', [ 'id' => $id, 'data' => $data ]);
    }

    public function validateLink( $request )
    {
        $request->validate([
            'title' => 'required|max:255',
            'link'  => 'required|min:10',
            'color' => 'required'
        ]);
    }

    public function getByIdLink( $id )
    {
        return HyperLinks::find( $id );
    }
}
