<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterParameterRequest;
use App\Http\Requests\StoreParameterRequest;
use App\Models\Parameter;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(FilterParameterRequest $request): JsonResponse
    {
        $startDate = Carbon::parse($request->start_dt);
        $endDate = Carbon::parse($request->end_dt);

        switch ($request->type) {
            case 't':
                $typeId = Type::TERMOMETER;
                break;
            case 'p':
                $typeId = Type::MANOMETER;
                break;
            case
                'v':
                $typeId = Type::TACHOMETER;
                break;
        }

        $parameters = Parameter::select('created_at', 'value')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->where('type_id', '=', $typeId)
            ->get();

        return response()->json($parameters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParameterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParameterRequest $request): JsonResponse
    {
        if ($request->has('t')) {
            $type_id = Type::TERMOMETER;
            $value = $request->get('t');
        } elseif ($request->has('p')) {
            $type_id = Type::MANOMETER;
            $value = $request->get('p');
        } elseif ($request->has('v')) {
            $type_id = Type::TACHOMETER;
            $value = $request->get('v');
        } else {
            return response()->json(['validation' => 'error'], 400);
        }

        $parameter = Parameter::create(['type_id' => $type_id, 'value' => $value]);

        return response()->json(['parameter_id' => $parameter->id]);
    }

}
