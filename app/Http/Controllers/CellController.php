<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HyperLinks;

class CellController extends Controller
{
    public function index(Request $request, $id = null)
    {

        if ( $id && $id != null && is_numeric( $id ) )
            $this->deleteLink($id);

        $allLinks = $this->getAllLinks();

        return view ( 'home', [ 'data' => $allLinks ] );
    }

    public function getAllLinks()
    {
        $cells = [];
        $getAll = HyperLinks::all();

        for ( $i = 1; $i <= 9; $i++ )
        {
            array_push($cells, [
                'id'        => '',
                'title'     => '',
                'link'      => '',
                'color'     => '',
                'id_cell'   => $i
            ]);
        }

        foreach ($cells as &$element)
        {
            foreach ($getAll as $value)
            {
                if ( $element['id_cell'] == $value->id_cell )
                {
                    $element['id'] = $value->id;
                    $element['title'] = $value->title;
                    $element['link'] = $value->link;
                    $element['color'] = $value->color;
                }
            }
        }

        return $cells;
    }

    public function deleteLink( $id )
    {
        HyperLinks::destroy($id);
    }
}
