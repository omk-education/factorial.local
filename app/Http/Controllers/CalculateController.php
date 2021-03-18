<?php

namespace App\Http\Controllers;

use Calculate;
use App\Http\Requests\FactorialRequest;

class CalculateController extends Controller
{
    /**
     * Загрузка формы
     *
     * @return View представление
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Вычисление факториала
     *
     * @param FactorialRequest $request получение данных из формы
     *
     * @return View представление
     */
    public function factorial(FactorialRequest $request)
    {
        // получение данных
        $number = $request->number;

        // вычисление факториала
        $factorial = Calculate::factorial($number);

        // передача данных представлению
        return view('index', [
            'number' => $number,
            'factorial' => $factorial,
        ]);
    }
}
