<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    // POST: Even / Odd
    public function checkEvenOdd(Request $request)
    {
        $number = $request->input('number');
        $result = ($number % 2 === 0) ? 'Even' : 'Odd';
        return back()->with('evenOddResult', "Number $number is $result");
    }

    // POST: Multiplication Table
    public function multiplicationTable(Request $request)
    {
        $number = $request->input('number');
        $table = [];
        for($i=1;$i<=10;$i++){
            $table[] = "$number x $i = " . ($number*$i);
        }
        return back()->with('multiplicationTable', $table);
    }

    // GET: Even / Odd from URL
    public function evenOddFromUrl($number)
    {
        $result = ($number % 2 === 0) ? 'Even' : 'Odd';
        return "<h1>Number $number is $result</h1><a href='/task1'>Back to Task 1</a>";
    }

    // GET: Multiplication Table from URL
    public function multiplicationFromUrl($number)
    {
        $table = [];
        for($i=1;$i<=10;$i++){
            $table[] = "$number x $i = " . ($number*$i);
        }
        $html = "<h1>Multiplication Table of $number</h1>";
        foreach($table as $line){
            $html .= "<p>$line</p>";
        }
        $html .= "<a href='/task1'>Back to Task 1</a>";
        return $html;
    }
}