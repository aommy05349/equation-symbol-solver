<?php

namespace App\Http\Controllers;

use App\Services\EquationSymbolSolver;

class EquationSymbolController extends Controller {
    public function index() {
        $solver = new EquationSymbolSolver();
        $results = $solver->solve();
        return view('welcome', [
            'attempts' => $results['attempts'],
            'solutions' => $results['solutions']
        ]);
    }
}
