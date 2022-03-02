<?php
namespace tool_course\task;

use tool_course\models\createcourse;

class course extends \core\task\scheduled_task
{
    /**
     * return name of task for admin panel.
     *
     * @return string name
     */
    public function get_name()
    {
        return get_string('cronenroll', 'tool_course');
    }

    /**
     * method to execute by cron task.
     */
    public function execute()
    {
      // mtrace("Hola mundo");
      global $CFG;
      $course = new createcourse();
      $course->enrolled_course();
    }
}
