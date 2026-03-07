<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function showTask1()
    {
        return view('task1');
    }

    public function checkEvenOdd(Request $request)
    {
        $number = $request->input('number');
        $result = ($number % 2 === 0) ? 'Even' : 'Odd';
        return back()->with('evenOddResult', "Number $number is $result");
    }

    public function multiplicationTable(Request $request)
    {
        $number = $request->input('number');
        $table = [];
        for ($i = 1; $i <= 10; $i++) {
            $table[] = "$number x $i = " . ($number * $i);
        }
        return back()->with('multiplicationTable', $table);
    }

    public function evenOddFromUrl($number)
    {
        $result = ($number % 2 === 0) ? 'Even' : 'Odd';
        return "<h1>Number $number is $result</h1><a href='/task1'>Back to Task 1</a>";
    }

    public function multiplicationFromUrl($number)
    {
        $table = [];
        for ($i = 1; $i <= 10; $i++) {
            $table[] = "$number x $i = " . ($number * $i);
        }
        $html = "<h1>Multiplication Table of $number</h1>";
        foreach ($table as $line) {
            $html .= "<p>$line</p>";
        }
        $html .= "<a href='/task1'>Back to Task 1</a>";
        return $html;
    }
}