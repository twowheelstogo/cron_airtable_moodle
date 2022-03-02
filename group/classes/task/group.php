<?php
namespace tool_group\task;

use tool_group\models\creategroup;

class group extends \core\task\scheduled_task
{
    /**
     * return name of task for admin panel.
     *
     * @return string name
     */
    public function get_name()
    {
        return get_string('cronenroll', 'tool_group');
    }

    /**
     * method to execute by cron task.
     */
    public function execute()
    {
      // mtrace("Hola mundo");
      global $CFG;
      $group = new creategroup(); 
      $group->create_groups();    
      $group->assignment_group();
    }
}
