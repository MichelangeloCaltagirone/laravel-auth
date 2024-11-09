<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
            "name" => "Liuteria",
            "author" => "Andrea",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime magnam, aperiam iste consectetur nesciunt illo quo cupiditate ducimus adipisci molestias architecto, omnis, vitae quibusdam quasi. Beatae autem unde excepturi"
            ],
            [
            "name" => "Fotografia",
            "author" => "Barbara",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime magnam, aperiam iste consectetur nesciunt illo quo cupiditate ducimus adipisci molestias architecto, omnis, vitae quibusdam quasi. Beatae autem unde excepturi"
            ],
            [
            "name" => "Illustrazione",
            "author" => "Pietro",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime magnam, aperiam iste consectetur nesciunt illo quo cupiditate ducimus adipisci molestias architecto, omnis, vitae quibusdam quasi. Beatae autem unde excepturi"
            ],
        ];

        foreach($projects as $project) {
            $newProject = new Project();
            $newProject->name = $project["name"];
            $newProject->author = $project["author"];
            $newProject->description = $project["description"];
            $newProject->save();
        }
    }

}
