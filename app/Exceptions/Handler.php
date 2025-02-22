<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\GraphQL\Exceptions\ExceptionHandler as GraphQLExceptionHandler;

use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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

        $this->renderable(function (Exception $exception, $request) {


            if ($exception instanceof NotFoundHttpException) {

                if ($request->hasHeader("Accept-Lang")) {
                    app()->setLocale($request->header("Accept-Lang"));
                }

                throw new GraphQLExceptionHandler($exception->getMessage(), 400);
            }

            if ($exception instanceof InvalidSignatureException) {

                if ($request->hasHeader("Accept-Lang")) {
                    app()->setLocale($request->header("Accept-Lang"));
                }

                throw new GraphQLExceptionHandler($exception->getMessage(), 403);
            }

            if ($exception instanceof RouteNotFoundException) {

                if ($request->hasHeader("Accept-Lang")) {
                    app()->setLocale($request->header("Accept-Lang"));
                }

                throw new GraphQLExceptionHandler($exception->getMessage(), 400);
            }
        });
    }
    
    

    public function render($request, Exception|Throwable $e)
    {
        if ($e instanceof ModelNotFoundException) {
            throw new GraphQLExceptionHandler("data not found", 400);
        }

        return parent::render($request, $e);
    }
    
//     protected function unauthenticated($request, AuthenticationException $exception)
// {
//     if ($request->expectsJson()) {
//       //  return response()->json(['error' => 'Please login.'], 401);
//         throw new Exception('Welcome', 422);
//     }
    
//     return redirect()->route('login')->with('error', 'You must log in first.');
// }
    
    
}
