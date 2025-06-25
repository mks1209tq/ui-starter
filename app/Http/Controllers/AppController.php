<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $bentoItems = [
            [
                'title' => 'Org Development',
                'description' => 'App 1',
                'gridClasses' => 'relative lg:row-span-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]',
                'routeName' => 'apps1',
            ],
            [
                'title' => 'Employee Services',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit maiores impedit.',
                'gridClasses' => 'relative max-lg:row-start-1',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]',
            ],
            [
                'title' => 'Government Services',
                'description' => 'Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.',
                'gridClasses' => 'relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]',
            ],
            [
                'title' => 'Payroll',
                'description' => 'Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.',
                'gridClasses' => 'relative max-lg:row-start-4 lg:col-start-2 lg:row-start-3',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]',
            ],
            [
                'title' => 'Housing',
                'description' => 'Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.',
                'gridClasses' => 'relative lg:row-span-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]',
            ],
            [
                'title' => 'Health Care',
                'description' => 'Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.',
                'gridClasses' => 'relative lg:row-span-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]',
            ],
            [
                'title' => 'Welfare',
                'description' => 'Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.',
                'gridClasses' => 'relative lg:row-span-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]',
            ],
            [
                'title' => 'Companies',
                'description' => 'Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.',
                'gridClasses' => 'relative lg:row-span-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]',
            ],
            [
                'title' => 'Location',
                'description' => 'Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.',
                'gridClasses' => 'relative lg:row-span-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]',
            ],
            [
                'title' => 'Security',
                'description' => 'Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.',
                'gridClasses' => 'relative lg:row-span-2',
                'contentClasses' => 'relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]',
            ],
            
        ];

        return view('apps.index', compact('bentoItems'));
    }
}