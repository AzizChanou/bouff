<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Inertia\Inertia;
use Throwable;

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
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Prepare exception for rendering
     *
     * @param \Throwable $e
     * @return \Throwable
     */
    public function render($request, Throwable $e)
    {
        $response = parent::render($request, $e);
        // dd($response->status());
        if (!app()->environment(['', 'testing']) && in_array(
            $response->status(),
            [403]
        )) {
            return Inertia::render('Error/Forbidden', ['status' => $response->status()])
                ->toResponse($request)
                ->setStatusCode($response->status());
        } elseif ($response->status() === 404) {
            return Inertia::render('Error/Error404', ['status' => $response->status()])
                ->toResponse($request)
                ->setStatusCode($response->status());
        } elseif ($response->status() === 403) {
            return Inertia::render('Error/Forbbiden', ['status' => $response->status()])
                ->toResponse($request)
                ->setStatusCode($response->status());
        } elseif ($response->status() === 503) {
            return Inertia::render('Error/Maintenance', ['status' => $response->status()])
                ->toResponse($request)
                ->setStatusCode($response->status());
        } /* elseif ($response->status() === 500) {
            return Inertia::render('Error/Serveur', ['status' => $response->status()])
                ->toResponse($request)
                ->setStatusCode($response->status());
        }  */ elseif ($response->status() === 419) {
            return back()->with([
                'error' => ('The page expired, please try again.'),
            ]);
        }
        return $response;
    }
}
