<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bookIds = Book::all()->pluck("id");
        $start_date = fake()->date();
        $end_date = date("Y-m-d", strtotime($start_date . "+1 week"));

        return [
            "book_id"=>fake()->randomElement($bookIds),
            "start_date"=>$start_date,
            "end_date"=>$end_date
        ];
    }
}
