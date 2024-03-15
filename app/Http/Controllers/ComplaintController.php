<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Http\Requests\StoreComplaintRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use stdClass;

class ComplaintController extends Controller
{
    private $complaint;

    public function __construct(Complaint $complaint) {
        $this->complaint = $complaint;
    }

    public function create()
    {
        return view('denunciar');
    }

    public function store(StoreComplaintRequest $request)
    {
        $formData = $request->all();

        $this->complaint->create($formData);

        session()->flash('success', 'Denuncia registrada com sucesso!');

        return redirect()->back();
    }

    public function upload(Request $request)
    {
        $file = $request->file('photo');
        $newNameFile = $file->hashName();
        $basePath = '/uploads/';

        // Realizar o upload
        $file->storeAs($basePath, $newNameFile);

        $responseData = new stdClass;

        if (Storage::has($basePath . $newNameFile)) {

            $manager = new ImageManager(new Driver());
            $image = $manager->read(Storage::path($basePath . $newNameFile));
            $image->scale(width: 400);
            $image->save();

            $responseData->imageName = $basePath . $newNameFile;

            return response()->json($responseData, Response::HTTP_OK);

        }

        $responseData->message = "Não foi possível realizar o upload!";

        return response()->json($responseData, Response::HTTP_BAD_REQUEST);
    }
}
