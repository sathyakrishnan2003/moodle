<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage(
        'local_aitutor',
        'AI Tutor'
    );

    $ADMIN->add('localplugins', $settings);
}