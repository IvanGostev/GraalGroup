<?php

namespace App\Http\Controllers\Training\Main;

use App\Http\Controllers\Controller;

use App\Models\Course;
use App\Models\Hometask;
use App\Models\Lesson;
use App\Models\UserCourse;
use App\Models\UserLesson;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Course $course, Lesson $lesson)
    {

        $lessons = Lesson::where('course_id', $course->id)->get();
        $hometasks = Hometask::where('course_id', $course->id)->get();
        $data['course_id'] = $course->id;
        $data['user_id'] = auth()->user()->id;
        UserCourse::firstOrCreate($data);
        $data['lesson_id'] = $lesson->id;
        UserLesson::create($data);
        $userLessons = UserLesson::where('user_id', auth()->user()->id)
            ->where('course_id', $data['course_id'])
            ->where('lesson_id', $data['lesson_id'])
            ->get()
            ->sortBy('created_at');
        $userLesson = $userLessons;
        foreach ($userLessons as $lesson) {
            $userLesson = $lesson;
            break;

        }
        $thisLessons = Lesson::where('id', $userLesson['lesson_id'])->get();
        $thisLesson = $thisLessons;
        foreach ($thisLessons as $lesson) {
            $thisLesson = $lesson;
            break;

        }
        var_dump($thisLesson['course_id']);

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
                $contents[$e]['href'] = $contents[$e + 1];
            }
        }

        return view('training.main.show', compact('course', 'contents', 'thisLesson'));
    }
}
