<?php

namespace App\Console\Commands;

use App\Models\Document;
use File;
use Illuminate\Console\Command;
use Storage;

class ImportDocumentsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:documents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $mediaPath = public_path('media');
        $mediaPath = "e:/Za evidenciju";
        $filesInFolder = File::allFiles($mediaPath);
        $allMedia = [];


        foreach ($filesInFolder as $path) {
            $pathinfo = pathinfo($path);
            $basename = $pathinfo['basename'];
            // $allMedia[] = $files['basename'];

            try{
                // $request->store_file();

                $new_path = Storage::disk('public')->path($basename);
                File::copy($path,$new_path);
                $document = Document::create(['filename' => $basename,'type' => $pathinfo['extension']]);
                // return response()->json('success');
            }catch(\Exception $e){
                // return response()->json($e->getMessage(), 500);
    
            }
        }
    }
}
