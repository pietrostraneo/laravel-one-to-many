<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config('projects');
        foreach ($projects as $project) {
            $addproject = new Project();

            $addproject->name = $project['name'];
            $addproject->description = $project['description'];
            foreach ($project['supervisors'] as $item) {
                $addproject->supervisors .= $item . ', ';
            };
            $addproject->framework = $project['framework'];
            $addproject->assignment_date = $project['assignment_date'];
            $addproject->save();
        }
    }
}
