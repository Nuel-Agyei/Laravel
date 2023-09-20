<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use App\Models\LoanType;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function allLoanApplications()
        {
        $loan = LoanApplication::latest()->get();
        return view('admin.loan_application.all', compact('loan'));
        }

    public function loanApplication()
        {
            $loanTypes = LoanType::all();
            return view('user.loan_application.application');
        }

}
