<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser, Browser $secondbrowser) {
            // First brower can performen action, like: packing into a chart
            $browser->visit('/')
                    ->assertSee('Laravel');
            //Second brower can i.e. test the realtime application
            $secondbrowser->visit('/');
        });
    }
}
