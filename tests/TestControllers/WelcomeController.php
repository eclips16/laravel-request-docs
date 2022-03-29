<?php

namespace Rakutentech\LaravelRequestDocs\Tests\TestControllers;

use Rakutentech\LaravelRequestDocs\Tests\TestRequests\WelcomeIndexRequest;
use Rakutentech\LaravelRequestDocs\Tests\TestRequests\WelcomeEditRequest;
use Rakutentech\LaravelRequestDocs\Tests\TestRequests\WelcomeStoreRequest;
use Rakutentech\LaravelRequestDocs\Tests\TestRequests\WelcomeDeleteRequest;

class WelcomeController
{
    public function index(WelcomeIndexRequest $request)
    {
        return 1;
    }

    public function edit(WelcomeEditRequest $request)
    {
        return 1;
    }

    public function store(WelcomeStoreRequest $request)
    {
        return 1;
    }

    public function destroy(WelcomeDeleteRequest $request)
    {
        return 1;
    }
}
