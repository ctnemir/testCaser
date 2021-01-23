<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\DB;

class statusListTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @group status
     */
    public function testExample1()
    {
        //$statuses[] = DB::table('statuses')->get();
        $this->browse(function (Browser $browser) {

            $browser->loginAs(User::find(1))
                ->visit('/tecCard/1')
                ->screenshot("status")
                ->assertSeeIn('@statusCard3','Revision');
        });
    }

    /**
     * A Dusk test example2.
     *
     * @return void
     * @group status
     */
    public function testExample2()
    {
        //$statuses[] = DB::table('statuses')->get();
        $this->browse(function (Browser $browser) {

            $browser->loginAs(User::find(1))
                ->visit('/tecCard/1')
                ->screenshot("status")
                ->assertSeeIn('@statusCard1','Todo');
        });
    }

    /**
     * A Dusk test example3.
     *
     * @return void
     * @group status
     */
    public function testExample3()
    {
        //$statuses[] = DB::table('statuses')->get();
        $this->browse(function (Browser $browser) {

            $browser->loginAs(User::find(1))
                ->visit('/tecCard/1')
                ->screenshot("status")
                ->assertSeeIn('@statusCard2','In Progress');
        });
    }
    /**
     * A Dusk test example4.
     *
     * @return void
     * @group status
     */
    public function testExample4()
    {
        //$statuses[] = DB::table('statuses')->get();
        $this->browse(function (Browser $browser) {

            $browser->loginAs(User::find(1))
                ->visit('/tecCard/1')
                ->screenshot("status")
                ->assertSeeIn('@statusCard4','Check');
        });
    }
    /**
     * A Dusk test example5.
     *
     * @return void
     * @group status
     */
    public function testExample5()
    {
        //$statuses[] = DB::table('statuses')->get();
        $this->browse(function (Browser $browser) {

            $browser->loginAs(User::find(1))
                ->visit('/tecCard/1')
                ->screenshot("status")
                ->assertSeeIn('@statusCard5','Done');
        });
    }
}
