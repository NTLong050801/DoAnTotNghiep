<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    public function index()
    {
        $html = app('router')->getRoutes()->match(app('request')->create(route('file-manager.index')))->run();
        return view('pages.teachers.document-manager.index',compact('html'));
    }
}
