<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAvatarController extends Controller
{
    public function showSelector()
    {
        $user = Auth::user();

        // Rango de avatares a mostrar 
        $avatarIds = range(1, 99);

        return view('user.avatar_select', compact('user', 'avatarIds'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'avatar_id' => 'required|integer|min:1|max:100',
        ]);

        $user = Auth::user();
        $user->avatar_id = $request->input('avatar_id');
        $user->save();

        // Si la petición es AJAX, devolvemos JSON
        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Avatar actualizado',
                'avatar_url' => $user->avatar_url,
            ]);
        }

        // Si no, redirigimos de forma clásica
        return back()->with('success', 'Avatar actualizado');
    }
}
