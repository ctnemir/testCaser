<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class OrnekTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group asa
     * @return void
     */
    public function testExample4(){

        $id = User::where('email','=','test@test.com')->first()->id;
        User::destroy([$id]);

        $this->browse( function ($browser){
            $browser->visit('/register')
                ->screenshot('reg')
                ->type('input[name="name"]', 'Test TEST')
                ->type('input[name="email"]', 'test@test.com')
                ->type('input[name="password"]', '123456789')
                ->type('input[name="password_confirmation"]', '123456789')
                ->press('Register')
                ->waitForLocation('/dashboard')
                ->assertPathIs('/dashboard');
        });
    }

    /**
     * A Dusk test example.
     * @group asa
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function ($browser) {
                $browser->loginAs(User::where('email', '=', 'test@test.com')->first())
                    ->visit('/tecCard/1')
                    ->screenshot('register')
                    ->assertSeeIn('@userName', 'Test TEST');

            });
        });
    }


/**
 * A Dusk test example2.
 * @group register
 * @return void
 */
//public function testExample2()
//{
//    $this->browse( function ($browser){
//        $browser->loginAs(User::where('email','=','test@test.com')->first())
//            ->visit('/tecCard/1')
//            ->screenshot('register')
//            ->assertSeeIn('@userName','Test TEST');
//    });
//}
}
