#!/bin/bash

# Navigate to the correct theme directory
cd /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme || exit

# Pull the latest changes from GitHub
git pull origin master > deploy.log 2>&1

# Set correct file permissions (optional)
chown -R nisateamir:nisateamir /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme
chmod -R 755 /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme

# Log the deployment
echo "Deployed at $(date)" >> deploy.log
