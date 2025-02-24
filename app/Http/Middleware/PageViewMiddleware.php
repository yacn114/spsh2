<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PageViewMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $url = $request->path();


        $today = Carbon::today();


        $pageView = PageView::where('url', $url)
        ->where('date', $today)
            ->first();

        if ($pageView) {
            $pageView->views += 1;
            $pageView->save();
        } else {
            PageView::create([
                'page_id' => md5($url),
                'date' => $today,
                'views' => 1,
                'url' => $url,
            ]);
        }

        return $next($request);
    }
}
