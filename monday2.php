<?php
class school
{
    public $teacher='michaels';
    private $lesson='maths';
    public $attendance='full';
    public $exam;
    public function classSession()
    {
        echo ' the '.$this->lesson. ' lesson was taught by mr '. $this->teacher. ' when the class was in '.$this->attendance. 'attendance';
    }
    public function setExam($exam)
    {
        $this->exam= $exam;
    }
    public function getExam()
    {
        echo $this->exam;
    }
}
$class_lesson=new school();
$class_lesson->teacher;
//class_lesson->lesson;
$class_lesson->attendance;
$class_lesson->exam='results';
//echo $class_lesson->exam;
//$class_lesson->classSpecification();
$class_lesson->setExam('mean grades');
$class_lesson->getExam();