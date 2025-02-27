<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PermissionControlMidlleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$parametr): Response
    {
        $permission = Permission::where("name", $parametr)->first();
        // dd($permission);
        if (!Auth::check() || !Auth::user()->role->HasPermission($permission->name)) {
            abort(404);
        }
        
        return $next($request);
        
        
    }
}
