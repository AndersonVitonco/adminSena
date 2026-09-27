<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;
use App\Models\TrainingCenter;
use App\Models\Computer;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Apprentice;

class AdminsenaSeeder extends Seeder
{
    public function run(): void
    {
        $areas = [
            ['name' => 'Sistemas'],
            ['name' => 'Software'],
            ['name' => 'Redes'],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }

        $centers = [
            ['name' => 'CEET', 'location' => 'Bogota'],
            ['name' => 'CIDE', 'location' => 'Medellin'],
        ];

        foreach ($centers as $center) {
            TrainingCenter::create($center);
        }

        $computers = [
            ['number' => 'COMP-001', 'brand' => 'Dell'],
            ['number' => 'COMP-002', 'brand' => 'HP'],
            ['number' => 'COMP-003', 'brand' => 'Lenovo'],
        ];

        foreach ($computers as $computer) {
            Computer::create($computer);
        }

        $teachers = [
            ['name' => 'Carlos Perez', 'email' => 'carlos.perez@example.com', 'area_id' => 1, 'training_center_id' => 1],
            ['name' => 'Maria Lopez', 'email' => 'maria.lopez@example.com', 'area_id' => 2, 'training_center_id' => 1],
            ['name' => 'Jorge Ruiz', 'email' => 'jorge.ruiz@example.com', 'area_id' => 3, 'training_center_id' => 2],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }

        $courses = [
            ['course_number' => 'Fundamentos de Programacion', 'day' => 'Lunes', 'area_id' => 2, 'training_center_id' => 1],
            ['course_number' => 'Bases de Datos', 'day' => 'Miercoles', 'area_id' => 1, 'training_center_id' => 1],
            ['course_number' => 'Administracion de Redes', 'day' => 'Viernes', 'area_id' => 3, 'training_center_id' => 2],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }

        $apprentices = [
            ['name' => 'Ana Torres', 'email' => 'ana.torres@example.com', 'cell_number' => '3001112233', 'course_id' => 1, 'computer_id' => 1],
            ['name' => 'Luis Gomez', 'email' => 'luis.gomez@example.com', 'cell_number' => '3004445566', 'course_id' => 2, 'computer_id' => 2],
            ['name' => 'Sofia Diaz', 'email' => 'sofia.diaz@example.com', 'cell_number' => '3007778899', 'course_id' => 3, 'computer_id' => 3],
        ];

        foreach ($apprentices as $apprentice) {
            Apprentice::create($apprentice);
        }
    }
}