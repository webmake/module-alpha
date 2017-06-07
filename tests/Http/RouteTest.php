<?php

namespace Tests\Http;

use Illuminate\Foundation\Application;
use ModuleAlpha\Alpha\Providers\AlphaServiceProvider;
use Orchestra\Testbench\TestCase;

class RouteTest extends TestCase
{
    /**
     * @param Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            AlphaServiceProvider::class,
        ];
    }

    /**
     * @test
     */
    public function get_alpha()
    {
        $response = $this->get(route('alpha'));

        $response->assertDontSee('beta');
        $response->assertSee('alpha');
        $response->assertSee(config('module_alpha.text'));
    }
}
