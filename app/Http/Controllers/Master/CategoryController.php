<?php

namespace App\Http\Controllers\Master;

use App\Models\Master\CategoryModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('master.category');
    }

    public function list_category()
    {

        try {
           $data =CategoryModel::all();

         return DataTables::of($data)
          ->addIndexColumn()
                    ->addColumn('aksi', function() {
                       $btn = '<div class="d-flex justify-content-center">';
                       $btn .= '<button type="button" style="margin-right:5px;" class="btn btn-primary btn-sm" title="Disable Category"/><i class="bx bx bx-pencil"></i> </button>';
                       $btn .= '<button type="button" style="margin-right:5px;" class="btn btn-warning btn-sm editdata" title="Edit Category"/><i class="bx bx-pencil"></i></button>';
                        $btn .= '<button type="button" style="margin-right:5px;" class="btn btn-danger btn-sm hapusdata" title="Hapus Category"/><i class="bx bx-trash"></i></button>';
                       $btn .= '</div>';
                        return $btn;
                    })
                    ->rawColumns(['aksi'])
                    ->make(true);
        } catch (\Throwable $th) {
            return response()->json(['pesan' =>$th->getMessage()]);
        }

    }

    public function delete_category(Request $request){
        try {
            $data = $request->all();
            CategoryModel::where('id', $data['id'])->delete();
             return response()->json(['pesan' => 'Data dihapus']);
        } catch (\Throwable $th) {
            return response()->json(['pesan' =>$th->getMessage()]);
        }

    }
}
