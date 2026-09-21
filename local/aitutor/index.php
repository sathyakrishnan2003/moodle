<?php
require('../../config.php');

require_login();

$PAGE->set_url('/local/aitutor/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title('AI Tutor');
$PAGE->set_heading('AI Tutor');

echo $OUTPUT->header();

echo '<h2>AI Tutor</h2>';
echo '<p>Groq Primary → OpenRouter Fallback</p>';

echo '<form method="post">';
echo '<input type="text" name="question" placeholder="Ask your question" size="60">';
echo '<button type="submit">Ask AI</button>';
echo '</form>';

if (!empty($_POST['question'])) {
    echo '<h3>Your question</h3>';
    echo '<p>' . s($_POST['question']) . '</p>';
    echo '<p>AI Tutor is ready for API integration.</p>';
}

echo $OUTPUT->footer();