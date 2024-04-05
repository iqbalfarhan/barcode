<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->generateKode(),
            'description' => fake()->sentence(),
        ];
    }

    function generateKode() {
        $huruf = chr(rand(65, 90));
        $angka = rand(1000, 9999);
        $huruf2 = chr(rand(65, 90));
        $kode = $huruf . $angka . $huruf2;

        return $kode;
    }
}
