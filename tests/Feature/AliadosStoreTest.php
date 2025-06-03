<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Aliados;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AliadosStoreTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_stores_a_new_aliado_successfully()
    {
        Storage::fake('local');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->postJson(route('aliados.store'), [
            'user_id' => 1,
            'title' => 'Test Aliado',
            'enlace' => 'https://example.com',
            'imagen' => $file,
        ]);

        $response->assertStatus(200)
                 ->assertJson(['message' => 200]);

        $this->assertDatabaseHas('aliados', [
            'user_id' => 1,
            'title' => 'Test Aliado',
            'enlace' => 'https://example.com',
        ]);

        Storage::disk('local')->assertExists('aliados/' . $file->hashName());
    }

    /** @test */
    public function it_fails_to_store_duplicate_user_id()
    {
        Aliados::factory()->create(['user_id' => 1]);

        $response = $this->postJson(route('aliados.store'), [
            'user_id' => 1,
            'title' => 'Duplicate Aliado',
            'enlace' => 'https://example.com',
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 403,
                     'message_text' => 'el Aliados ya existe',
                 ]);
    }
}
