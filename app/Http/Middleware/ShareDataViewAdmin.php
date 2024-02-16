<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShareDataViewAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $q = "WITH RECURSIVE CTE AS
            (
                SELECT *, 1 AS level, concat(id) as index_no
                FROM categories
                WHERE parent_id = 0
                UNION ALL
                SELECT m.*, mc.level + 1, concat(mc.index_no,'.', m.id) as index_no
                FROM categories m
                INNER JOIN CTE mc ON mc.id = m.parent_id
            )
            SELECT * FROM CTE order by index_no;
        ";

        \View::share('Categories', \DB::select($q));

        return $next($request);
    }
}
