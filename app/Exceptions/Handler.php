<?php

namespace App\Exceptions;

use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Http\Exception\HttpResponseException;
use Illuminate\Http\JsonResponse;

class Handler extends ExceptionHandler
{
  /*   public function render($request, Throwable $exception ){
        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'error' => 'Email already in use'
            ], 403);
        }
        return parent::render($request, $exception);
    } */
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */

    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

}
