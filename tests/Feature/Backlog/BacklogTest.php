<?php

namespace Tests\Feature\Backlog;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Task;
use App\Models\User;

class BacklogTest extends TestCase
{
    use RefreshDatabase;

    public function testBasicTest()
    {
        $response = $this->get('/backlog');

        $response->assertStatus(302);
    }

    public function testIndex()
    {
        $cinderella = factory(User::class)->states('cinderella')->make();

        $this->actingAs($cinderella)
            ->get("/backlog")
            ->assertStatus(200);
    }

    public function testStore()
    {
        $task = factory(Task::class)->make();
        $cinderella = factory(User::class)->states('cinderella')->make();

        $this->actingAs($cinderella)
            ->post('/backlog/task', $task)
            ->assertStatus(302);

        $task = Task::first();

        $this->assertDatabaseHas('task', $params);
    }

    
}
