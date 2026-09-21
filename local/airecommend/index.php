<?php
require('../../config.php');

echo $OUTPUT->header();
echo $OUTPUT->heading('AI Learning Recommendations');

$recommendations = [
    'Review courses with low grades',
    'Complete unfinished course activities',
    'Practice topics where performance is weak'
];

echo html_writer::start_tag('ul');

foreach ($recommendations as $recommendation) {
    echo html_writer::tag('li', $recommendation);
}

echo html_writer::end_tag('ul');
echo $OUTPUT->footer();