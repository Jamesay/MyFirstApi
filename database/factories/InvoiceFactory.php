<?php

namespace Database\Factories;
use app\Models\Invoice;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);

        return [
            'customer_id' => Customer::factory(),
            'status' => $status, //Billed(B), paid(P) or void(V) (in case of issue)
            'amount' => $this->faker->numberBetween(5000, 200000),
            'billed_on' => $this->faker->dateTimeThisDecade(),
            'paid_on' => $status == 'P' ? $this->faker->dateTimeThisDecade() : null
        ];
    }
}
