<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use App\User;
use Input;
use Response;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class RouteController extends Controller
{
    public function index() {

        return response()->json([
            'success' => false,
            'message' => 'Request Gagal1',
        ], 200);
    }

    public function IndexRouteSatu(Request $req, $satu) {

        return response()->json([
            'success' => false,
            'message' => 'Request Gagal2 '.$satu,
        ], 200);

    }

    public function IndexRouteDua(Request $req, $satu,$dua) {

        return response()->json([
            'success' => false,
            'message' => 'Request Gagal3 '.$satu.' - '.$dua,
        ], 200);

    }

    public function IndexRouteTiga(Request $req, $satu,$dua,$tiga) {

        return response()->json([
            'success' => false,
            'message' => 'Request Gagal4 '.$satu.' - '.$dua.' - '.$tiga,
        ], 200);

    }
}
