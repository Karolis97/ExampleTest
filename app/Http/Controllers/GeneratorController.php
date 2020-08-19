<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Generator;

class GeneratorController extends Controller
{
    public function index() {
        return Generator::all();
    }

    public function create(Request $request) {
        $generator = Generator::create($request->all());
        return response()->json($generator, 201);
    }

    public function read($id) {
        return Generator::find($id);
    }

    public function update(Request $request, Generator $generator) {
        $generator->update($request->all());
        return response()->json($generator, 200);
    }

    public function delete(Article $article) {
        $generator->delete();
        return response()->json(null, 204);
    }

    public function code($id) {
        $generator = Generator::find($id);
        $uniq_code = $generator->uniq_code;
        $name = $generator->name;
        $code = '<img src="https://qrcode.tec-it.com/API/QRCode?data=uniq_code%3d' . $uniq_code . '%0aname%3d' . $name . '&backcolor=%23ffffff" />';
        return base64_encode($code);
    }
}
