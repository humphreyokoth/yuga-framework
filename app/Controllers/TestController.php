<?php

namespace App\Controllers;

use App\Models\User;
use Yuga\Http\Request;
use Yuga\Http\Redirect;
use Yuga\Http\Response;

class TestController extends Controller
{
    public $user;
    /**
     * Create a new TestController instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        parent::__construct();
    }

    public function test(User $user)
    {
        dump($user);
    }
}
