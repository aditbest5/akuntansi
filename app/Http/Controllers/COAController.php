<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class COAController extends Controller
{
    public function showEditModul($id)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
        $list_group = DB::table('group_modul')->get();
        $list_modul = DB::table('modul_form')->where('id', $id)->first();
        return view('coa.modulManagementEdit', ['list_modul' => $list_modul, 'list_group' => $list_group]);
    }

    public function storeGroup(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
        $results = DB::table('group_modul')->insert([
            'group_modul_code' => $request->input('group_modul_code'),
            'group_modul_name' => $request->input('group_modul_name'),
            'group_modul_desc' => $request->input('group_modul_desc')
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function destroyGroup(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
        $deleted = DB::table('group_modul')->where('id', $request->input('id'))->delete();
        if (!$deleted) {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $deleted);
        } else {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        }
        return response()->json($resutlMsg);
    }

    public function destroyModul(Request $request)
    {
        $deleted = DB::table('modul_form')->where('id', $request->input('id'))->delete();
        if (!$deleted) {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $deleted);
        } else {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        }
        return response()->json($resutlMsg);
    }

    public function queryGroupName(Request $request)
    {
        $name = DB::table('group_modul')->where('id', $request->id)->first();
        return json_encode($name);
    }

    public function queryModulName(Request $request)
    {
        $name = DB::table('modul_form')->where('id', $request->id)->first();
        return json_encode($name);
    }

    public function storeModul(Request $request)
    {

        $results = DB::table('modul_form')->insert([
            'group_modul_code' => $request->input('group_modul_code'),
            'group_modul_name' => $request->input('group_modul_name'),
            'modul_code' => $request->input('modul_code'),
            'modul_name' => $request->input('modul_name'),
            'modul_description' => $request->input('modul_description'),
            'modul_status' => $request->input('modul_status')

        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function updateModul(Request $request, $id)
    {

        $results = DB::table('modul_form')->where('id', $id)->update([
            'group_modul_code' => $request->input('group_modul_code'),
            'group_modul_name' => $request->input('group_modul_name'),
            'modul_code' => $request->input('modul_code'),
            'modul_name' => $request->input('modul_name'),
            'modul_description' => $request->input('modul_description'),
            'modul_status' => $request->input('modul_status')

        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function storeCredit(Request $request)
    {
        $modul_code = DB::table('modul_form')->select('modul_code')->where('modul_name', 'Credit Term Management')->first();
        $results = DB::table('credit_term')->insert([
            'credit_term_code' => $request->input('credit_term_code'),
            'credit_term_name' => $request->input('credit_term_name'),
            'modul_code' => $modul_code->modul_code,
            'credit_term_value' => $request->input('credit_term_value'),
            'credit_term_status' => $request->input('credit_term_status'),

        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function updateCredit(Request $request, $id)
    {
        $modul_code = DB::table('modul_form')->select('modul_code')->where('modul_name', 'Credit Term Management')->first();
        $results =  DB::table('credit_term')->where('id', $id)->update([
            'credit_term_code' => $request->input('credit_term_code'),
            'credit_term_name' => $request->input('credit_term_name'),
            'credit_term_value' => $request->input('credit_term_value'),
            'modul_code' => $modul_code->modul_code,
            'credit_term_status' => $request->input('credit_term_status'),
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function destroyCredit(Request $request)
    {
        $deleted = DB::table('credit_term')->where('id', $request->input('id'))->delete();
        if (!$deleted) {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $deleted);
        } else {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        }
        return response()->json($resutlMsg);
    }

    public function storeCustomer(Request $request)
    {
        $modul_code = DB::table('modul_form')->select('modul_code')->where('modul_name', 'Customer Supplier Group Management')->first();
        $results = DB::table('customer_supplier_group')->insert([
            'group_code' => $request->input('group_code'),
            'coa_code' => $request->input('coa_code'),
            'coa_name' => $request->input('coa_name'),
            'group_name' => $request->input('group_name'),
            'group_description' => $request->input('group_description'),
            'group_status' => $request->input('group_status'),
            'modul_code' => $modul_code->modul_code,
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function updateCustomer(Request $request, $id)
    {
        $results = DB::table('customer_supplier_group')->where('id', $id)->update([
            'group_code' => $request->input('group_code'),
            'coa_code' => $request->input('coa_code'),
            'coa_name' => $request->input('coa_name'),
            'group_name' => $request->input('group_name'),
            'group_description' => $request->input('group_description'),
            'group_status' => $request->input('group_status'),
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function destroyCustomer(Request $request)
    {
        $deleted = DB::table('customer_supplier_group')->where('id', $request->input('id'))->delete();
        if (!$deleted) {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $deleted);
        } else {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        }
        return response()->json($resutlMsg);
    }

    public function storeSupplier(Request $request)
    {
        $modul_code = DB::table('modul_form')->select('modul_code')->where('modul_name', 'Supplier Type Management')->first();
        $results = DB::table('supplier_type')->insert([
            'supplier_type_code' => $request->input('supplier_type_code'),
            'supplier_type_name' => $request->input('supplier_type_name'),
            'supplier_type_desc' => $request->input('supplier_type_desc'),
            'supplier_type_status' => $request->input('supplier_type_status'),
            'modul_code' => $modul_code->modul_code,
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function updateSupplier(Request $request, $id)
    {
        $results = DB::table('supplier_type')->where('id', $id)->update([
            'supplier_type_code' => $request->input('supplier_type_code'),
            'supplier_type_name' => $request->input('supplier_type_name'),
            'supplier_type_desc' => $request->input('supplier_type_desc'),
            'supplier_type_status' => $request->input('supplier_type_status'),
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function destroySupplier(Request $request)
    {
        $deleted = DB::table('supplier_type')->where('id', $request->input('id'))->delete();
        if (!$deleted) {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $deleted);
        } else {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        }
        return response()->json($resutlMsg);
    }

    public function storeDocumentFormat(Request $request)
    {
        $results1 = DB::table('document_format')->insert([
            'doc_num_code' => $request->input('doc_num_code'),
            'modul_code' => $request->input('modul_code'),
            'modul_name' => $request->input('modul_name'),
            'doc_num_name' => $request->input('doc_num_name'),
            'start_number' => $request->input('start_number'),
            'format' => $request->input('format'),

        ]);

        $results2 = DB::table('modul_form')->where('modul_code', $request->input('modul_code'))->update([
            'document_status' => '1',
        ]);
        if (!($results1 && $results2)) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        } else {
            $results = array("sts" => "Y", "desc" => "Berhasil", "msg" => "Berhasil");
        }
        return response()->json($results);
    }

    public function updateDocumentFormat(Request $request)
    {
        $results1 = DB::table('document_format')->where('modul_code', $request->input('modul_code'))->update([
            'doc_num_code' => $request->input('doc_num_code'),
            'modul_code' => $request->input('modul_code'),
            'modul_name' => $request->input('modul_name'),
            'doc_num_name' => $request->input('doc_num_name'),
            'start_number' => $request->input('start_number'),
            'format' => $request->input('format'),

        ]);

        if (!($results1)) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        } else {
            $results = array("sts" => "Y", "desc" => "Berhasil", "msg" => "Berhasil");
        }
        return response()->json($results);
    }
    public function destroyDocumentFormat(Request $request)
    {
        $deleted = DB::table('document_format')->where('id', $request->input('id'))->delete();
        $updated = DB::table('modul_form')->where('modul_code', $request->input('code'))->update([
            'document_status' => '0',
        ]);;
        if (!($deleted && $updated)) {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $deleted);
        } else {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        }
        return response()->json($resutlMsg);
    }

    public function storeCurrency(Request $request)
    {
        $modul_code = DB::table('modul_form')->select('modul_code')->where('modul_name', 'Currency Management')->first();
        $results = DB::table('currency')->insert([
            'currency_code' => $request->input('currency_code'),
            'currency_name' => $request->input('currency_name'),
            'currency_desc' => $request->input('currency_desc'),
            'currency_status' => $request->input('currency_status'),
            'modul_code' => $modul_code->modul_code,
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function updateCurrency(Request $request, $id)
    {
        $results = DB::table('currency')->where('id', $id)->update([
            'currency_code' => $request->input('currency_code'),
            'currency_name' => $request->input('currency_name'),
            'currency_desc' => $request->input('currency_desc'),
            'currency_status' => $request->input('currency_status'),
        ]);
        if (!$results) {
            $results = array("sts" => "N", "desc" => "Gagal", "msg" => "Kesalahan Server");
        }
        return response()->json($results);
    }

    public function destroyCurrency(Request $request)
    {
        $deleted = DB::table('currency')->where('id', $request->input('id'))->delete();
        if (!$deleted) {
            $resutlMsg = array("sts" => "N", "desc" => " Delete Failed !", "msg" => $deleted);
        } else {
            $resutlMsg = array("sts" => "OK", "desc" => " Delete Success !", "msg" => "");
        }
        return response()->json($resutlMsg);
    }
}
