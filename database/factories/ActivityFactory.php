<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Project;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $priorities = ['very low', 'low', 'medium', 'high', 'very high'];
        $start_date = fake()->date();
        $end_date = fake()->dateTimeBetween($start_date, '+1 month');
        return [
            'name' => fake()->text(20),
            'description' => fake()->text(250),
            'priority' => fake()->randomElement($priorities),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'project_id' => Project::get()->random()->id
        ];
    }
}


/* 

 $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('priority');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('project_id');
            $table->foreign('project_id')->on('projects')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();


$table->id();
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('language');
            $table->date('expiration date');
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

*/