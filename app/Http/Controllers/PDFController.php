<?php

namespace App\Http\Controllers;




use PDF;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // public function generatePDF()
    // {
    //     $posts = Post::latest()->get();
    //     $pdf = PDF::loadView('generate_pdf', ['posts' => $posts]);

    //     $fileName =  time().'.'. 'pdf' ;
    //     $pdf->save(public_path() . '/' . $fileName);

    //     $pdf = public_path($fileName);
    //     return response()->download($pdf);
    // }
    public function generatePDF()
    {
        $posts = Post::latest()->get();
        $pdf = PDF::loadView('generate_pdf', ['posts' => $posts]);
    
        $fileName = 'posts_' . time() . '.pdf';
        $directory = public_path('pdfs');
    
        // Check if the directory doesn't exist, then create it
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true, true);
        }
    
        $filePath = public_path('pdfs/' . $fileName);
    
        $pdf->save($filePath);
    
        return response()->download($filePath, $fileName)->deleteFileAfterSend();
    }
}
