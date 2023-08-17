<?php

namespace App\Http\Controllers\Training\Main;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Hometask;
use App\Models\Lesson;
use App\Models\UserCourse;
use App\Models\UserHometask;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Course $course, Hometask $hometask)
    {
        $lessons = Lesson::where('course_id', $course->id)->get();
        $hometasks = Hometask::where('course_id', $course->id)->get();
        $data['course_id'] = $course->id;
        $data['user_id'] = auth()->user()->id;
        UserCourse::firstOrCreate($data);
        $data['hometask_id'] = $hometask->id;
        UserHometask::create($data);
        $userHometasks = UserHometask::where('user_id', auth()->user()->id)
            ->where('course_id', $data['course_id'])
            ->where('hometask_id', $data['hometask_id'])
            ->get()
            ->sortBy('created_at');
        $userHometask = $userHometasks;
        foreach ($userHometasks as $hometask) {
            $userHometask = $hometask;
            break;

        }
        $thisHometasks = Hometask::where('id', $userHometask['hometask_id'])->get();
        $thisHometask = $thisHometasks;
        foreach ($thisHometasks as $hometask) {
            $thisHometask = $hometask;
            break;

        }

        $contents = [];
        $count = 0;
        foreach ($lessons as $lesson) {
            $contents[$count] = $lesson;
            $contents[$count]['type'] = 'lesson';
            $count++;
        }


        foreach ($hometasks as $hometask) {
            $contents[$count] = $hometask;
            $contents[$count]['type'] = 'hometask';
            $count++;
        }

        for ($i = 0; $i < count($contents) - 1; $i++) {
            for ($e = 0; $e < count($contents) - 1; $e++) {
                $date1 = Carbon::parse($contents[$e]->created_at);
                $date2 = Carbon::parse($contents[$e + 1]->created_at);
                if ($date1 > $date2) {
                    $temp = $contents[$e + 1];
                    $contents[$e + 1] = $contents[$e];
                    $contents[$e] = $temp;
                }
            }
        }
        return view('training.main.create', compact('course', 'contents', 'thisHometask'));
    }
}
