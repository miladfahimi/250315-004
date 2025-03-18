<?php
// Enable debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<pre>";

// Run deploy.sh and capture output
$command = "bash -x /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme/deploy.sh 2>&1";
$output = shell_exec($command);

// Filter only important lines
$filtered_output = preg_replace('/^\+ (cd|chown|chmod|echo).*\n?/m', '', $output);

// Display clean output
echo "Output:\n" . ($filtered_output ?: "⚠️ No output!") . "\n";

// Show the last commit log
echo "✅ Last commit deployed:\n";
echo shell_exec("git -C /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme log -1 --oneline");

echo "</pre>";
?>