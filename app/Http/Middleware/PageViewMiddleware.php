<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use App\Models\Product;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

        // بررسی اینکه آیا آدرس از نوع product/{slug} است؟
        if (Str::startsWith($url, 'product/')) {
            // استخراج مقدار بعد از product/
            $slug = Str::after($url, 'product/');

            // یافتن محصول بر اساس slug
            $product = Product::where('slug', $slug)->first();
            if ($product) {
                // افزایش تعداد بازدید محصول
                $product->increment('view');
            }
        }

        // ثبت بازدید صفحه در PageView
        $pageView = PageView::where('url', $url)
            ->where('date', $today)
            ->first();

        if ($pageView) {
            $pageView->increment('views');
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
