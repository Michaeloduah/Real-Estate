<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function property() {
        $user = auth()->user();
        $properties = Property::all()->where('user_id', $user->id);
    }
}
