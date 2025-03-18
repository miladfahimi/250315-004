#!/bin/bash

cd /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme || exit

git pull origin master > deploy.log 2>&1

chown -R nisateamir:nisateamir /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme
chmod -R 755 /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme

echo "✅" >> deploy.log
echo "Deployed at $(date)" >> deploy.log