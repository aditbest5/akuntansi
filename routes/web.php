<?php

use App\Http\Controllers\COAController;
use Illuminate\Http\Request;
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


Route::get('/credit-management', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'Credit Term Management')->first();
    $count = DB::table('credit_term')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.creditManagementAdd', ['document_format' => $document_format, 'count' => $count]);
});

Route::get('/list-credit-management', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_credit_term = DB::table('credit_term')->where('credit_term_name', 'LIKE', '%' . $search_term . '%')->orWhere('credit_term_value', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_credit_term = DB::table('credit_term')->get();
    }
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

Route::get('/list-customer-supplier-group', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_customer_supplier = DB::table('customer_supplier_group')->where('group_name', 'LIKE', '%' . $search_term . '%')->orWhere('group_description', 'LIKE', '%' . $search_term . '%')->orWhere('coa_name', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_customer_supplier = DB::table('customer_supplier_group')->get();
    }
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

Route::get('/edit-group-modul/{edit_id}', function ($id) {
    $list_group_modul = DB::table('group_modul')->where('id', $id)->first();
    return view('coa.groupModulEdit', ['list_group_modul' => $list_group_modul]);
});

Route::get('/modul-management', function () {
    $list_group = DB::table('group_modul')->get();
    return view('coa.modulManagementAdd', ['list_group' => $list_group]);
});

Route::get('/edit-modul-management/{edit_id}', [COAController::class, 'showEditModul']);

Route::get('/list-modul-management',  function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_modul = DB::table('modul_form')->where('modul_name', 'LIKE', '%' . $search_term . '%')->orWhere('modul_description', 'LIKE', '%' . $search_term . '%')->orWhere('group_modul_name', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_modul = DB::table('modul_form')->get();
    }
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
Route::get('/list-currency-management', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_currency = DB::table('currency')->where('currency_name', 'LIKE', '%' . $search_term . '%')->orWhere('currency_desc', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_currency = DB::table('currency')->get();
    }
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

Route::get('/list-supplier-type-management', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_supplier_type = DB::table('supplier_type')->where('supplier_type_name', 'LIKE', '%' . $search_term . '%')->orWhere('supplier_type_desc', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_supplier_type = DB::table('supplier_type')->get();
    }
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

Route::get('/list-journal-type-management', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_journal_type = DB::table('journal_type')->where('journal_type_name', 'LIKE', '%' . $search_term . '%')->orWhere('journal_type_desc', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_journal_type = DB::table('journal_type')->get();
    }
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

Route::get('/edit-journal-type-management/{edit_id}', function ($id) {
    $list_journal = DB::table('journal_type')->where('id', $id)->first();
    return view('coa.journalTypeManagementEdit', ['list_journal' => $list_journal]);
});

Route::get('/list-payment-management', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_payment = DB::table('payment_method')->where('journal_type_name', 'LIKE', '%' . $search_term . '%')->orWhere('payment_method_name', 'LIKE', '%' . $search_term . '%')->orWhere('payment_method_desc', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_payment = DB::table('payment_method')->get();
    }
    return view('coa.paymentMethodManagement', ['list_payment' => $list_payment]);
});

Route::get('/payment-management', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'Payment Method Management')->first();
    $list_journal = DB::table('journal_type')->get();
    $list_coa = DB::table('coa_entry_list')->get();
    $count = DB::table('payment_method')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.paymentMethodManagementAdd', ['document_format' => $document_format, 'count' => $count, 'list_journal' => $list_journal, 'list_coa' => $list_coa]);
});

Route::get('/edit-payment-management/{edit_id}', function ($id) {
    $list_payment = DB::table('payment_method')->where('id', $id)->first();
    return view('coa.paymentMethodManagementEdit', ['list_payment' => $list_payment]);
});

Route::get('/list-tax-management', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_tax = DB::table('tax_type')->where('tax_name', 'LIKE', '%' . $search_term . '%')->orWhere('tax_method', 'LIKE', '%' . $search_term . '%')->orWhere('tax_code', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_tax = DB::table('tax_type')->get();
    }
    return view('coa.taxManagement', ['list_tax' => $list_tax]);
});

Route::get('/tax-management', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'Tax Type Management')->first();
    $list_coa = DB::table('coa_entry_list')->get();
    $count = DB::table('tax_type')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.taxManagementAdd', ['document_format' => $document_format, 'count' => $count, 'list_coa' => $list_coa]);
});

Route::get('/list-coa-group', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_coa_group = DB::table('coa_group')->where('coa_group_name', 'LIKE', '%' . $search_term . '%')->orWhere('coa_report', 'LIKE', '%' . $search_term . '%')->orWhere('coa_mutation', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_coa_group = DB::table('coa_group')->get();
    }
    return view('coa.coaGroup', ['list_coa_group' => $list_coa_group]);
});


Route::get('/coa-group', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'COA Group')->first();
    $count = DB::table('tax_type')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.coaGroupAdd', ['count' => $count, 'document_format' => $document_format]);
});

Route::get('/list-coa-entry-list', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_coa = DB::table('coa_entry_list')->where('coa_name', 'LIKE', '%' . $search_term . '%')->orWhere('coa_group_name', 'LIKE', '%' . $search_term . '%')->orWhere('coa_header_name', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_coa = DB::table('coa_entry_list')->get();
    }
    return view('coa.coaEntryList', ['list_coa' => $list_coa]);
});

Route::get('/coa-entry-list', function () {
    $document_format = DB::table('document_format')->where('modul_name', 'COA Entry List')->first();
    $list_coa_group = DB::table('coa_group')->get();
    $list_coa = DB::table('coa_entry_list')->get();
    $count = DB::table('coa_group')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.coaEntryListAdd', ['count' => $count, 'document_format' => $document_format, 'list_coa_group' => $list_coa_group, 'list_coa' => $list_coa]);
});

Route::get('/edit-coa-entry-list/{edit_id}', function ($id) {
    $list_coa_entry = DB::table('coa_entry_list')->where('id', $id)->first();
    $list_coa = DB::table('coa_entry_list')->get();
    $list_coa_group = DB::table('coa_group')->get();

    return view('coa.coaEntryListEdit', ['list_coa_entry' => $list_coa_entry, 'list_coa_group' => $list_coa_group, 'list_coa' => $list_coa]);
});

Route::get('/list-cash-bank-header', function (Request $request) {
    $search_term = $request->input('search');
    if ($search_term) {
        $list_bank_header = DB::table('cash_bank_header')->where('doc_no', 'LIKE', '%' . $search_term . '%')->orWhere('doc_reff_no', 'LIKE', '%' . $search_term . '%')->orWhere('doc_type', 'LIKE', '%' . $search_term . '%')->get();
    } else {
        $list_bank_header = DB::table('cash_bank_header')->get();
    }
    return view('coa.cashBankEntry', ['list_bank_header' => $list_bank_header]);
});

Route::get('/cash-bank-header', function (Request $request) {
    $document_format = DB::table('document_format')->where('modul_name', 'COA Entry List')->first();
    $list_bank_header = DB::table('cash_bank_header')->get();
    $list_payment = DB::table('payment_method')->get();
    $count = DB::table('coa_group')->count();
    if ($document_format === null) {
        $document_format = (object) ['format' => null];
    }
    return view('coa.cashBankEntryAdd', ['count' => $count, 'document_format' => $document_format, 'list_bank_header' => $list_bank_header, 'list_payment' => $list_payment]);
});
