<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $folder_path = database_path('data');

        $file = glob($folder_path . '/*.csv');

        foreach ($file as $path) {
            echo "Importing: " . basename($path) . "/n";

            if (($handle = fopen($path, 'r')) !== false) {
                $header = fgetcsv($handle, 1000, ',');

                while (($row = fgetcsv($handle, 1000, ',')) != false) {
                    $data = array_combine($header, $row);
                    DB::table('questions')->insert([
                        'category_id' => $data['category_id'],
                        'type_question' => $data['type_question'],
                        'answer' => $data['answer'],
                        'point' => $data['point'],
                        'difficulty_level' => $data['difficulty_level'],
                        'question_text' => $data['question_text'],
                        'image_path' => $data['image_path'] ?? null,
                        'created_at'=>now(),
                        'updated_at'=>now()


                    ]);
                }
                fclose($handle);
            }
        }
    }
}
