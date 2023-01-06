<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_creating_adming_with_image()
    {
        $response = $this->post('/register',[
                'name'=>'reda',
                'email'=>'reda@fake.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'Role'=>'admin',
                'image_path'=>UploadedFile::fake()->image('avatar.png',)->size(100),
  
            ]
        );

        Storage::disk('avatars')->assertExists('avatar.png');

    }
}