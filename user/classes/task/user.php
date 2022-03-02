<?php
namespace tool_user\task;

use tool_user\models\usercreate;

class user extends \core\task\scheduled_task
{
    /**
     * return name of task for admin panel.
     *
     * @return string name
     */
    public function get_name()
    {
        return get_string('cronenroll', 'tool_user');
    }

    /**
     * method to execute by cron task.
     */
    public function execute()
    {
      // mtrace("Hola mundo");
      global $CFG;
      $user = new usercreate(); 
      $user->create_user();     
     
    }
}
