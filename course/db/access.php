<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = array(
  'tool/course:managepassword' => array(
      'riskbitmask' => RISK_CONFIG,
      'captype' => 'write',
      'contextlevel' => CONTEXT_SYSTEM,
      'archetypes' => array(
            'manager' => CAP_ALLOW
        ),
  ),
);
