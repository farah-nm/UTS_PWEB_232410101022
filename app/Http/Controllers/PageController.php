<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
{
    if (!$request->session()->has('username')) {
        return view('login');
    }
        return redirect()->route('dashboard');
}
    public function doLogin(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');
    $validCredentials = [
        'admin' => '13',
        'Aisyah' => '1',
        'Farah' => '2'
    ];
    if (!array_key_exists($username, $validCredentials) || $validCredentials[$username] !== $password) {
        return redirect()->back()->withErrors(['Invalid username or password']);
    }
    $request->session()->put('username', $username);
    $request->session()->put('password', $password);

    return redirect()->route('dashboard')->withQuery(['username' => $username]);
}

public function dashboard(Request $request)
{
    $username = $request->session()->get('username');

    $statistik = [
        'total_kamar' => 150,
        'terisi' => 123,
        'kosong' => 27,
        'pendapatan' => 'Rp36.900.000'
    ];

    $kamar = [
        ['tipe' => 'Tipe 1', 'img' => 'https://i.pinimg.com/736x/d1/b7/4f/d1b74f3f6c514889b73244f63466a3b3.jpg'],
        ['tipe' => 'Tipe 2', 'img' => 'https://i.pinimg.com/736x/b8/f8/ee/b8f8ee9b014e809f9f33e151cb9cb675.jpg'],
        ['tipe' => 'Tipe 3', 'img' => 'https://i.pinimg.com/736x/f4/0b/28/f40b281154345a8375c3974b073fd5ad.jpg'],
        ['tipe' => 'Tipe 4', 'img' => 'https://i.pinimg.com/736x/ce/ee/d6/ceeed69908be5525b84b6078c000a912.jpg'],
        ['tipe' => 'Tipe 5', 'img' => 'https://i.pinimg.com/736x/a4/7c/a4/a47ca44865d23c1d610e9a2e77d01713.jpg'],
        ['tipe' => 'Tipe 6', 'img' => 'https://i.pinimg.com/736x/73/fa/69/73fa690cb287f719f2d6f70ae0df56d2.jpg'],
    ];

    return view('dashboard', compact('username', 'statistik', 'kamar'));
}

public function pengelolaan(Request $request)
{
    $pengelolaan = [
        ['nama' => 'Aisyah Putri', 'kamar' => 'A1', 'masuk' => '2024-05-01', 'status' => 'Lunas'],
        ['nama' => 'Farah Nadia', 'kamar' => 'B1', 'masuk' => '2024-04-15', 'status' => 'Belum Lunas'],
        ['nama' => 'Fadhila Nuria', 'kamar' => 'C1', 'masuk' => '2024-03-20', 'status' => 'Lunas'],
        ['nama' => 'Ajeng Rani', 'kamar' => 'D1', 'masuk' => '2024-02-10', 'status' => 'Belum Lunas'],
        ['nama' => 'Dilan Saputra', 'kamar' => 'E1', 'masuk' => '2024-01-05', 'status' => 'Lunas'],
        ['nama' => 'Dita Dewi', 'kamar' => 'F1', 'masuk' => '2023-12-25', 'status' => 'Belum Lunas'],
        ['nama' => 'Misyel Hayim', 'kamar' => 'G1', 'masuk' => '2023-11-15', 'status' => 'Lunas'],
        ['nama' => 'Ayu Bilqis', 'kamar' => 'H1', 'masuk' => '2023-10-30', 'status' => 'Belum Lunas'],
        ['nama' => 'Tanoe Hadibyanti', 'kamar' => 'I1', 'masuk' => '2023-09-20', 'status' => 'Lunas'],
        ['nama' => 'Bellsy Abel', 'kamar' => 'A2', 'masuk' => '2023-08-10', 'status' => 'Lunas'],
    ];
    return view('pengelolaan', compact('pengelolaan'));
}

public function pengingat(Request $request)
{
    $pengingat = [
        'Tagihan kamar A1 belum dibayar (jatuh tempo 5 Mei)',
        'Tagihan kamar B2 belum dibayar (jatuh tempo 7 Mei)',
        'Tagihan kamar C3 belum dibayar (jatuh tempo 10 Mei)',
        'Tagihan kamar D4 belum dibayar (jatuh tempo 12 Mei)',
        'Tagihan kamar E5 belum dibayar (jatuh tempo 15 Mei)',
        'Tagihan kamar F6 belum dibayar (jatuh tempo 18 Mei)',
        'Tagihan kamar G7 belum dibayar (jatuh tempo 20 Mei)',
        'Tagihan kamar H8 belum dibayar (jatuh tempo 22 Mei)',
        'Tagihan kamar I9 belum dibayar (jatuh tempo 25 Mei)',
        'Tagihan kamar A10 belum dibayar (jatuh tempo 28 Mei)',
        'Tagihan kamar B11 belum dibayar (jatuh tempo 30 Mei)',
        'Tagihan kamar C12 belum dibayar (jatuh tempo 2 Juni)',
        'Tagihan kamar D13 belum dibayar (jatuh tempo 5 Juni)',
        'Tagihan kamar E14 belum dibayar (jatuh tempo 7 Juni)',
    ];
    $layanan = [
        'Kamar B2 butuh perbaikan AC',
        'Kamar C1 butuh pembersihan',
        'Kamar D3 butuh perbaikan lampu',
        'Kamar E4 butuh pembersihan',
        'Kamar F5 butuh perbaikan pintu',
        'Kamar G6 butuh pembersihan',
        'Kamar H7 butuh perbaikan jendela',
        'Kamar I8 butuh pembersihan',
    ];

    return view('pengingat', compact('pengingat', 'layanan'));
}

    public function profile(Request $request)
{
        $username = $request->session()->get('username');

        $users = [
            'admin' => [
                'nama' => 'Pak Sam Keren',
                'email' => 'sam@gmail.com',
                'telepon' => '08123450987',
            ],
            'Aisyah' => [
                'nama' => 'Aisyah Putri',
                'email' => 'aisyah@gmail.com',
                'telepon' => '08123456789',
            ],
            'Farah' => [
                'nama' => 'Farah Nadia',
                'email' => 'farah@gmail.com',
                'telepon' => '082233445566',
            ],
            'Fadhila' => [
                'nama' => 'Fadhila Nuria',
                'email' => 'fad@gmail.com',
                'telepon' => '0833333445566',
            ],
            'Ajeng' => [
                'nama' => 'Ajeng Rani',
                'email' => 'aran@gmail.com',
                'telepon' => '082230005566',
            ],
            'Dilan' => [
                'nama' => 'Dilan Saputra',
                'email' => 'dilsap@gmail.com',
                'telepon' => '009833445566',
            ],
            'Dita' => [
                'nama' => 'Dita Dewi',
                'email' => 'ddwi@gmail.com',
                'telepon' => '080983445566',
            ],
            'Misyel' => [
                'nama' => 'Misyel Hayim',
                'email' => 'fmisy@gmail.com',
                'telepon' => '09876445566',
            ],
            'Ayu' => [
                'nama' => 'Ayu Bilqis',
                'email' => 'abil@gmail.com',
                'telepon' => '098233445566',
            ],
            'Tanoe' => [
                'nama' => 'Tanoe Hadibyanti',
                'email' => 'hadd@gmail.com',
                'telepon' => '08223367899',
            ],
            'Bellsy' => [
                'nama' => 'Bellsy Abel',
                'email' => 'belbel@gmail.com',
                'telepon' => '08245678966',
            ]

        ];

        $profile = $users[$username] ?? null;

        if (!$profile) {
            return "Profil tidak ditemukan.";
        }

        return view('profile', [
            'profile' => $profile,
            'username' => $username
        ]);
}

    public function logout(Request $request)
{
        $request->session()->forget('username');
        $request->session()->forget('password');
        return redirect('/login')->with('success', 'Logout berhasil.');
}
};
