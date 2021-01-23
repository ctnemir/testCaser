<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group addProject
     * @return void
     */
    public function testBasicExample()
    {
        DB::table('projects')->where('projectName','=','TestProject')->delete();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit('/tecCard/1')
                ->waitFor('@createProject')
                ->press('@createProject')
                ->pause(5000)
                ->type('@projectNameInput','TestProject')
                ->screenshot('test')
                ->press('@projectSubmit')
                ->waitForLocation('/tecCard/'.DB::table('projects')->latest()->first()->id)
                ->assertSeeIn('@projectName',DB::table('projects')->latest()->first()->projectName);
        });
    }
}
