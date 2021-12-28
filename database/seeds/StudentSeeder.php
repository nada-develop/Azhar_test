<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(["sit_no" => "1", "student_name" => " احمد محمد جمعه", "year" => "2021", "student_status" => "مبصر", "student_institute" => "معهد الفاروق" , "student_address" => "مكرم عبيد", "student_term" => " الاولى", "student_result" => "ناجح" , "student_total" => 365.5]);
        Student::create(["sit_no" => "2", "student_name" => " يوسف ابراهيم جمعه", "year" => "2019", "student_status" => "كفيف", "student_institute" => "معهد الفتى" , "student_address" => "عباس عبيد", "student_term" => " الثانية", "student_result" => "راسب" , "student_total" => 300]);
        Student::create(["sit_no" => "3", "student_name" => " سيد محمد جمعه", "year" => "2000", "student_status" => "مبصر", "student_institute" => "معهد النور" , "student_address" => "المنيا", "student_term" => " الاولى", "student_result" => "ناجح" , "student_total" => 288]);
        Student::create(["sit_no" => "4", "student_name" => " علي هادي كرم", "year" => "2021", "student_status" => "كفيف", "student_institute" => "معهد العلا" , "student_address" => "الاسكندرية ", "student_term" => " الاولى", "student_result" => "راسب" , "student_total" => 320]);


    }
}
