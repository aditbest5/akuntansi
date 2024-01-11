<?php

use App\Http\Controllers\COAController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
//ini untuk root
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('data-factory', function () {
    return view('master_data.basic_master.dataFactory');
});
Route::get('data-user', function () {
    return view('master_data.basic_master.dataUser');
});
Route::get('setting-user', function () {
    return view('master_data.system.settingUser');
});
Route::get('master-setting', function () {
    return view('master_data.system.masterSetting');
});
Route::get('employee', function () {
    return view('master_data.human_resource.employee');
});
Route::get('admin-barang', function () {
    return view('admin.barang');
});
Route::get('admin-pembelian', function () {
    return view('admin.pembelian');
});
Route::get('admin-penjualan', function () {
    return view('admin.penjualan');
});
Route::get('product-score-card', function () {
    return view('customer.productScoreCard');
});
Route::get('customer-score-card', function () {
    return view('customer.customerScoreCard');
});

Route::get('vendor-product-scorecard', function () {
    return view('vendor.productScoreCard');
});
Route::get('vendor-customer-scorecard', function () {
    return view('vendor.customerScoreCard');
});
Route::get('purchase-request', function () {
    return view('transaksi.pesanan.purchase');
});
Route::get('purchase-request-approval', function () {
    return view('transaksi.pesanan.purchaseApproval');
});
Route::get('purchase-order', function () {
    return view('transaksi.pembelian.purchaseOrder');
});
Route::get('purchase-order-approval', function () {
    return view('transaksi.pembelian.purchaseOrderApproval');
});
Route::get('general-receive-note', function () {
    return view('transaksi.penerimaan.generalReceive');
});
Route::get('payment-entry', function () {
    return view('transaksi.pembayaran.paymentEntry');
});
Route::get('payment-query', function () {
    return view('transaksi.pembayaran.paymentQuery');
});
Route::get('material-request', function () {
    return view('transaksi.pemakaian.materialRequest');
});
Route::get('general-issue', function () {
    return view('transaksi.pemakaian.generalIssue');
});
Route::get('purchase-request-summary', function () {
    return view('report.pesanan.purchaseRequestSummary');
});
Route::get('purchase-summary', function () {
    return view('report.pembelian.purchaseSummary');
});
Route::get('general-receive-summary', function () {
    return view('report.penerimaan.generalReceiveSummary');
});
Route::get('payment-summary', function () {
    return view('report.pembayaran.paymentSummary');
});
Route::get('material-request-summary', function () {
    return view('report.pemakaian.materialRequestSummary');
});
Route::get('general-issue-note', function () {
    return view('report.pemakaian.generalIssueSummary');
});
Route::get('/coa-group', function () {
    return view('coa.coaGroupAdd');
});
Route::get('/coa-entry-list', function () {
    return view('coa.coaEntryList');
});

Route::get('/credit-management', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'Credit Term Management')->first();
    $count = DB::table('credit_term')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.creditManagementAdd', ['document_format' => $document_format, 'count' => $count]);
});

Route::get('/list-credit-management', function () {
    $list_credit_term = DB::table('credit_term')->get();
    return view('coa.creditManagement', ['list_credit_term' => $list_credit_term]);
});

Route::get('/edit-credit-management/{edit_id}', function ($id) {
    $list_credit = DB::table('credit_term')->where('id', $id)->first();
    return view('coa.creditManagementEdit', ['list_credit' => $list_credit]);
});


Route::get('/customer-supplier-group', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'Customer Supplier Group Management')->first();
    $count = DB::table('customer_supplier_group')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.customerSupplierGroupAdd', ['document_format' => $document_format, 'count' => $count]);
});

Route::get('/list-customer-supplier-group', function () {
    $list_customer_supplier = DB::table('customer_supplier_group')->get();
    return view('coa.customerSupplierGroup', ['list_customer_supplier' => $list_customer_supplier]);
});

Route::get('/edit-customer-supplier-group/{edit_id}', function ($id) {
    $list_customer_supplier = DB::table('customer_supplier_group')->where('id', $id)->first();
    return view('coa.customerSupplierGroupEdit', ['list_customer_supplier' => $list_customer_supplier]);
});

Route::get('/group-modul', function () {
    return view('coa.groupModulAdd');
});

Route::get('/list-group-modul', function () {
    $list_group = DB::table('group_modul')->get();
    return view('coa.groupModul', ['list_group' => $list_group]);
});

Route::get('/modul-management', function () {
    $list_group = DB::table('group_modul')->get();
    return view('coa.modulManagementAdd', ['list_group' => $list_group]);
});

Route::get('/edit-modul-management/{edit_id}', [COAController::class, 'showEditModul']);

Route::get('/list-modul-management',  function () {
    $list_modul = DB::table('modul_form')->get();
    return view('coa.modulManagement', ['list_modul' => $list_modul]);
});

Route::get('/currency-management', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'Currency Management')->first();
    $count = DB::table('currency')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.currencyManagementAdd', ['document_format' => $document_format, 'count' => $count]);
});
Route::get('/list-currency-management', function () {
    $list_currency = DB::table('currency')->get();
    return view('coa.currencyManagement', ['list_currency' => $list_currency]);
});

Route::get('/edit-currency-management/{edit_id}', function ($id) {
    $list_currency = DB::table('currency')->where('id', $id)->first();
    return view('coa.currencyManagementEdit', ['list_currency' => $list_currency]);
});

Route::get('/supplier-type-management', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'Supplier Type Management')->first();
    $count = DB::table('supplier_type')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.supplierTypeManagementAdd', ['document_format' => $document_format, 'count' => $count]);
});

Route::get('/edit-supplier-type-management/{edit_id}', function ($id) {
    $list_supplier = DB::table('supplier_type')->where('id', $id)->first();
    return view('coa.supplierTypeManagementEdit', ['list_supplier' => $list_supplier]);
});

Route::get('/list-supplier-type-management', function () {
    $list_supplier_type = DB::table('supplier_type')->get();
    return view('coa.supplierTypeManagement', ['list_supplier_type' => $list_supplier_type]);
});

Route::get('/list-document-format', function () {
    $list_document_format = DB::table('document_format')->get();
    return view('coa.documentNumberingManagement', ['list_document_format' => $list_document_format]);
});

Route::get('/document-format', function () {
    $list_document_format = DB::table('document_format')->get();
    $list_modul = DB::table('modul_form')->get();
    return view('coa.documentNumberingManagementAdd', ['list_document_format' => $list_document_format, 'list_modul' => $list_modul]);
});

Route::get('/document-format/{code}', function ($code) {
    $modul_code = DB::table('document_format')->where('modul_code', $code)->first();
    $list_modul = DB::table('modul_form')->get();
    if (!$modul_code) {
        $modul_code = DB::table('modul_form')->where('modul_code', $code)->first();
        return view('coa.documentNumberingManagementPilih', ['modul_code' => $modul_code, 'list_modul' => $list_modul]);
    }
    return view('coa.documentNumberingManagementEdit', ['modul_code' => $modul_code, 'list_modul' => $list_modul]);
});

Route::get('/list-journal-type-management', function () {
    $list_journal_type = DB::table('journal_type')->get();
    return view('coa.journalTypeManagement', ['list_journal_type' => $list_journal_type]);
});

Route::get('/journal-type-management', function () {
    $list_journal_type = DB::table('journal_type')->get();
    $count = DB::table('journal_type')->count();

    $document_format = DB::table('document_format')->where('modul_name', 'Journal Type Management')->first();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.journalTypeManagementAdd', ['list_journal_type' => $list_journal_type, 'document_format' => $document_format, 'count' => $count]);
});
