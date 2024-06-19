<?php

namespace App\Http\Controllers;

use App\Http\Requests\LiveDonorReg;
use App\Http\Requests\LiveRecpReg;
use App\Http\Requests\LiveRoutine;
use App\Models\DonorReg;
use App\Models\LiveDonor;
use App\Models\RecpReg;
use App\Models\Routine;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function index()
    {
        return view('forms');
    }

    public function liveRecpDemo()
    {
        return view('forms/live-recp-demo');
    }

    public function liveDonorRoutine()
    {
        return view('forms/live-donor');
    }

    public function liveDonorDemo()
    {
        return view('forms/live-donor-demographic');
    }

    public function liveReceive(LiveRoutine $request)
    {
        $attributes = $request->all();

        // dump($attributes);
        $cr_no = $request->get('routine_hmis_cr_no');

        if ($request->has('routine_cdc_upload_report')) {
            $file1 = 'cdc_' . $cr_no . '.' . $request->routine_cdc_upload_report->extension();
            $request->routine_cdc_upload_report->storeAs('public/uploads', $file1);
        }

        if ($request->has('routine_hla_match_upload_report')) {
            $file1 = 'hlaMatch_' . $cr_no . '.' . $request->routine_hla_match_upload_report->extension();
            $request->routine_hla_match_upload_report->storeAs('public/uploads', $file1);
        }

        if ($request->has('routine_t_b_upload_report')) {
            $file1 = 't_b_' . $cr_no . '.' . $request->routine_t_b_upload_report->extension();
            $request->routine_t_b_upload_report->storeAs('public/uploads', $file1);
        }

        $routineData = new Routine;

        $columnsToExclude = ['_token', 'proengsoft_jsvalidation', 'routine_cdc_upload_report', 'routine_hla_match_upload_report', 'routine_t_b_upload_report'];

        $data = collect($attributes)->except($columnsToExclude)->all();

        $routineData->fill($data);

        $routineData->save();

        return view('forms/live-donor')->with('message', "Data saved successfully");
    }

    public function liveRecpDemoReceive(LiveRecpReg $request)
    {
        $attributes = $request->all();
        // dump($attributes);

        $cr_no = $request->get('recp_crn_no');

        if ($request->has('recp_family_tree')) {
            $file1 = 'familyTree_' . $cr_no . '.' . $request->recp_family_tree->extension();
            $request->recp_family_tree->storeAs('public/uploads', $file1);
        }

        if ($request->has('recp_if_taking_any_medication__upload_prescription')) {
            $file1 = 'medPrescr_' . $cr_no . '.' . $request->recp_if_taking_any_medication__upload_prescription->extension();
            $request->recp_if_taking_any_medication__upload_prescription->storeAs('public/uploads', $file1);
        }

        $recpReg = new RecpReg;

        $columnsToExclude = ['_token', 'proengsoft_jsvalidation', 'recp_family_tree', 'recp_if_taking_any_medication__upload_prescription'];

        $data = collect($attributes)->except($columnsToExclude)->all();

        $recpReg->fill($data);

        $recpReg->save();

        return view('forms/live-recp-demo')->with('message', "Data saved successfully");
    }

    public function liveDonorDemoReceive(LiveDonorReg $request)
    {

        $attributes = $request->all();

        $cr_no = $request->get('donor_crn_no');

        if ($request->has('donor_family_tree')) {
            $file1 = 'familyTree_' . $cr_no . '.' . $request->donor_family_tree->extension();
            $request->donor_family_tree->storeAs('public/uploads', $file1);
        }

        if ($request->has('donor_if_taking_any_medication__upload_prescription')) {
            $file1 = 'medPrescr_' . $cr_no . '.' . $request->donor_if_taking_any_medication__upload_prescription->extension();
            $request->donor_if_taking_any_medication__upload_prescription->storeAs('public/uploads', $file1);
        }

        $donorReg = new DonorReg;

        $columnsToExclude = ['_token', 'proengsoft_jsvalidation', 'donor_family_tree', 'donor_if_taking_any_medication__upload_prescription'];

        $data = collect($attributes)->except($columnsToExclude)->all();

        $donorReg->fill($data);

        $donorReg->save();

        return view('forms/live-donor-demographic')->with('message', "Data saved successfully");
    }
}

/* 
@elseif(request()->route() && request()->route()->getName() == 'live-recp-demo')
        @vite(['resources/js/liverecpreg.js'])
*/

// // Set the response headers for CSV download
        // header('Content-Type: text/csv');
        // header('Content-Disposition: attachment; filename="routine_attributes_export.csv"');

        // // Open the output stream
        // $output = fopen('php://output', 'w');

        // // Write the header row
        // fputcsv($output, ['Attribute', 'Value']);

        // // Write the data rows
        // foreach ($attributes as $key => $value) {
        //     fputcsv($output, [$key, $value]);
        // }

        // // Close the output stream
        // fclose($output);