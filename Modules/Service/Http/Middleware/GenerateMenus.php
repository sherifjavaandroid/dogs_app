<?php

namespace Modules\Service\Http\Middleware;

use App\Trait\Menu;
use Closure;

class GenerateMenus
{
    use Menu;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        \Menu::make('menu', function ($menu) {
            // Service
            // $service = $this->parentMenu($menu, [
            //     'icon' => '<svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M21.25 13.4764C20.429 13.4764 19.761 12.8145 19.761 12.001C19.761 11.1865 20.429 10.5246 21.25 10.5246C21.449 10.5246 21.64 10.4463 21.78 10.3076C21.921 10.1679 22 9.97864 22 9.78146L21.999 7.10415C21.999 4.84102 20.14 3 17.856 3H6.144C3.86 3 2.001 4.84102 2.001 7.10415L2 9.86766C2 10.0648 2.079 10.2541 2.22 10.3938C2.36 10.5325 2.551 10.6108 2.75 10.6108C3.599 10.6108 4.239 11.2083 4.239 12.001C4.239 12.8145 3.571 13.4764 2.75 13.4764C2.336 13.4764 2 13.8093 2 14.2195V16.8949C2 19.158 3.858 21 6.143 21H17.857C20.142 21 22 19.158 22 16.8949V14.2195C22 13.8093 21.664 13.4764 21.25 13.4764Z" fill="currentColor"></path><path d="M15.4303 11.5887L14.2513 12.7367L14.5303 14.3597C14.5783 14.6407 14.4653 14.9177 14.2343 15.0837C14.0053 15.2517 13.7063 15.2727 13.4543 15.1387L11.9993 14.3737L10.5413 15.1397C10.4333 15.1967 10.3153 15.2267 10.1983 15.2267C10.0453 15.2267 9.89434 15.1787 9.76434 15.0847C9.53434 14.9177 9.42134 14.6407 9.46934 14.3597L9.74734 12.7367L8.56834 11.5887C8.36434 11.3907 8.29334 11.0997 8.38134 10.8287C8.47034 10.5587 8.70034 10.3667 8.98134 10.3267L10.6073 10.0897L11.3363 8.61268C11.4633 8.35868 11.7173 8.20068 11.9993 8.20068H12.0013C12.2843 8.20168 12.5383 8.35968 12.6633 8.61368L13.3923 10.0897L15.0213 10.3277C15.2993 10.3667 15.5293 10.5587 15.6173 10.8287C15.7063 11.0997 15.6353 11.3907 15.4303 11.5887Z" fill="currentColor"></path></svg>',
            //     'title' => 'Services',
            //     'nickname' => 'service',
            //     'order' => 140,
            // ]);

            // $this->childMain($service, [
            //     'title' => __('Category'),
            //     'route' => 'backend.categories.index',
            //     'active' => ['app/categories'],
            //     'order' => 140,
            // ]);

            // $this->childMain($service, [
            //     'title' => __('Sub-Category'),
            //     'route' => 'backend.categories.index_nested',
            //     'active' => ['app/sub-categories'],
            //     'order' => 140,
            // ]);

            // $this->childMain($service, [
            //     'title' => 'Service List',
            //     'route' => 'backend.services.index',
            //     'shortTitle' => 'SL',
            //     'active' => 'app/services',
            //     'order' => 140,
            // ]);

            // $this->childMain($service, [
            //     'title' => 'Service Package',
            //     'route' => 'backend.service.servicepackage.index',
            //     'shortTitle' => 'SP',
            //     'active' => 'app/service/servicepackage',
            //     'order' => 140,
            // ]);

        })->sortBy('order');

        return $next($request);
    }
}
