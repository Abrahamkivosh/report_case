<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Complaint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realText(100,2),
            'body'=>$this->faker->realText(),
            'owner_id'=>fn()=> User::all()->random() ,
            'admin_id'=>fn()=> User::all()->random() ,
            'status'=>$this->faker->randomElement(['approved', 'declined','pending']),
            'image'=>$this->faker->imageUrl()
        ];
    }
}
