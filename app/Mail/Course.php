<?php

namespace App\Mail;

use App\Courses;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Course extends Mailable
{
    use Queueable, SerializesModels;

    public $course;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Courses $course) 
    {
        $this->course = $course;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'you subscribe this course {$this->course->name}';
        return $this->subject($subject)->view('emails.courses.course');
    }
}
