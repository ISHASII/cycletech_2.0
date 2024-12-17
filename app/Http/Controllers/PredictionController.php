<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Kreasi;

class PredictionController extends Controller
{
    public function predict(Request $request)
    {
        // Validasi input file
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg|max:2048', // Maksimal ukuran file 2MB
        ]);

        try {
            // Ambil file dari request
            $file = $request->file('image');

            // Gunakan Guzzle untuk mengirim file ke API eksternal
            $client = new Client();

            $response = $client->post('https://veeesaaa-cycle-tech.hf.space/predict/', [
                'multipart' => [
                    [
                        'name' => 'file',
                        'contents' => fopen($file->getPathname(), 'r'),
                        'filename' => $file->getClientOriginalName(),
                    ],
                ],
            ]);

            // Decode respons dari API
            $responseBody = json_decode($response->getBody(), true);

            // Pastikan respons dari API memiliki data yang diinginkan
            if (isset($responseBody['class_label'])) {
                $predictedCategory = $responseBody['class_label'];

                // Ambil semua data kreasi berdasarkan kategori prediksi
                $recommendedCrafts = Kreasi::where('kategori_kreasi', $predictedCategory)->get();

                return view('Kreasi.deteksi', [
                    'predictedCategory' => $predictedCategory,
                    'recommendedCrafts' => $recommendedCrafts,
                ]);
            } else {
                return redirect()->back()->with('error', 'API tidak memberikan hasil yang valid.');
            }
        } catch (\Exception $e) {
            // Tangani kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}