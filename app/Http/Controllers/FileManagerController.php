<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    public function index()
    {
        //get allDirectories
//        dd(Storage::cloud()->allDirectories());
        // Đường dẫn đến thư mục bạn muốn bắt đầu đệ quy
        $startDirectory = '/';
        $items = $this->getAllFilesInDirectory($startDirectory);
        return view('pages.teachers.file-manager.index',compact('items'));
    }

    public function getAllFilesInDirectory($directory)
    {
        $items = [];

        // Lấy tất cả các tệp trong thư mục hiện tại
        $currentFiles = Storage::disk('google')->allFiles($directory);

        foreach ($currentFiles as $file) {
            $items[] = [
                'type' => 'file',
                'name' => basename($file),
                'path' => $file,
            ];
        }

        // Lấy tất cả các thư mục con
        $directories = Storage::disk('google')->allDirectories($directory);

        foreach ($directories as $subdirectory) {
            $subdirectoryName = basename($subdirectory);
            $subdirectoryItems = $this->getAllFilesInDirectory($subdirectory);

            $items[] = [
                'type' => 'directory',
                'name' => $subdirectoryName,
                'path' => $subdirectory,
                'items' => $subdirectoryItems,
            ];
        }

        return $items;
    }
}
