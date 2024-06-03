<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Jms\JmsJob;

class JmsJobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
      public function test_can_get_all_jobs()
    {
        // Assuming you have some JmsJob data seeded in the database
        $response = $this->get('/jms-jobs');

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'title',
                    'description',
                    'company',
                    'location',
                    'salary',
                    'created_by',
                    'created_at',
                    'updated_at',
                ],
            ]);
    }
}
