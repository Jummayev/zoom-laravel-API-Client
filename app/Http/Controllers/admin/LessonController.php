<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function teacher_attach(Request $request)
    {
        $request = $request->validator([
            'teacher_id' => 'required',
            'student_id' => 'required',
        ]);

        Lesson::create($request);

        return redirect('lesson-get');
    }

    public function lesson_get()
    {
        $lessons = Lesson::with(['student','teacher'])->get();
        return $lessons;
    }
}
