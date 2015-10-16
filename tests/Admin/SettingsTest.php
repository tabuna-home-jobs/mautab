<?php

class SettingsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->action('GET', 'Admin\SettingsController@index');
        //$view = $response->original;
        $this->assertViewHas('Roles');
    }


    public function testStore()
    {

    }


}
