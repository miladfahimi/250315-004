<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<pre>";

$command = "bash -x /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme/deploy.sh 2>&1";
$output = shell_exec($command);

$filtered_output = preg_replace('/^\+ (cd|chown|chmod|echo).*\n?/m', '', $output);

echo "Output:\n" . ($filtered_output ?: "⚠️ No output!") . "\n";

echo "✅ Last commit deployed:\n";
echo shell_exec("git -C /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme log -1 --oneline");


echo "</pre>";
?>