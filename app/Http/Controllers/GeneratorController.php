<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Generator;

class GeneratorController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/beneficiaries",
     *     @OA\Response(response="200", description="Display all beneficiaries"),
     * )
     */
    public function index() {
        return Generator::all();
    }
   
    /**
     * @OA\Post(
     *     path="/api/beneficiaries",
     *     @OA\Response(response="200", description="Create a beneficiary"),
     * )
     */ 
    public function create(Request $request) {
        $generator = Generator::create($request->all());
        return response()->json($generator, 200);
    }


    /**
     * @OA\Get(
     *     path="/api/beneficiaries/5/",
     *     @OA\Response(response="200", description="Display a beneficiary")
     * )
     */    
    public function read($id) {
        return Generator::find($id);
    }


    public function update(Request $request, $id) {
        $generator = Generator::find($id);
        $generator->update($request->all());
        return response()->json($generator, 200);
    }
 
    public function delete($id) {
        $generator = Generator::find($id);
        $generator->delete();
        return response()->json(null, 204);
    }


    /**
     * @OA\Get(
     *     path="/api/beneficiaries/5/qr-codes",
     *     @OA\Response(response="200", description="See the beneficiary QR code")
     * )
     */   
    public function code($id) {
        $generator = Generator::find($id);
        $uniq_code = $generator->uniq_code;
        $name = $generator->name;
        $code = '<img src="https://qrcode.tec-it.com/API/QRCode?data=uniq_code%3d' . $uniq_code . '%0aname%3d' . $name . '&backcolor=%23ffffff" />';
        return base64_encode($code);
    }
}
