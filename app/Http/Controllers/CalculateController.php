<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @param Request $request получение данных из формы
     *
     * @return View представление
     */
    public function factorial(Request $request)
    {
        // получение данных
        $number = $request->number;

        // валидация
        $validated = $request->validate([
            'number' => 'required|numeric|integer|min:0',
        ]);

        // вычисление факториала
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        // передача данных представлению
        return view('index', [
            'number' => $number,
            'factorial' => $factorial,
        ]);
    }
}
