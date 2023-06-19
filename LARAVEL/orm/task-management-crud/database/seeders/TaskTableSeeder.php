<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = new Task();
        $task->id = 2;
        $task->title = "Công việc 1";
        $task->content = "Nội dung công việc 1";
        $task->image = "";
        $task->due_date = "2021-03-08";
        $task->save();

        $task1 = new Task();
        $task1->id = 3;
        $task1->title = 'Công việc 11';
        $task1->image = "";
        $task1->due_date = "2021-03-08";
        $task1->save();
    }
}
