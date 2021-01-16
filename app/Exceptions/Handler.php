<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\DB;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        $event = DB::table('evenments')->get()[0];
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {

                return response()->view('errors.' . '404', compact('event'), 404);
            }

            if ($exception->getStatusCode() == 500) {

                return response()->view('errors.' . '500',compact('event'), 500);
            }
        }



        if ($exception instanceof QueryException) {
            if ($exception->getCode() == 23000) {
                return back()->with('ops!', 'Error il ya des relation entre les table');
            }
            return parent::render($request, $exception);
        }


            return parent::render($request, $exception);


    }
}
