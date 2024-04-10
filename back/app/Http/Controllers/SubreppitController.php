<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Subreppit;

class SubreppitController extends Controller
{

// afficher 1 subreppit
    public function show($subreppit_id)
    {
        $subreppit = Subreppit::find($subreppit_id);
        return response()->json($subreppit);
    }

// créer un subreppit
    public function create()
    {
        $subreppit = Subreppit::find($subreppit_id);
        return response()->json($subreppit);
    }

// supprimer un subreppit
    public function delete($subreppit_id)
    {
        $subreppit = Subreppit::find($subreppit_id);
        return response()->json($subreppit);
    }
}

