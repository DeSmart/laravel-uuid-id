<?php

declare(strict_types=1);

namespace DeSmart\Laravel\Uuid\Tests;

use DeSmart\Laravel\Uuid\HasUuidId;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase;

class HasUuidIdTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app->get('config')->set('database.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->artisan('migrate')->run();
    }

    /** @test */
    public function it_should_set_uuid_as_id_while_creating_user(): void
    {
        $user = new User(['name' => 'John Doe']);
        $user->save();

        $this->assertTrue(Str::isUuid($user->fresh()->getKey()));
    }
}

class User extends Model
{
    use HasUuidId;

    public $timestamps = false;

    protected $guarded = [];
}