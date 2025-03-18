#!/bin/bash

echo "Running deploy.sh as $(whoami)"

# Navigate to theme directory
cd /home/nisateamir/public_html/taktennis/wp-content/themes/tak-tennis-theme || { echo "Failed to change directory"; exit 1; }

# Pull the latest changes
echo "Running git pull..."
git pull origin master

# Set file permissions
echo "Setting file permissions..."
chown -R nisateamir:nisateamir .
chmod -R 755 .

# Log the deployment
echo "Deployment completed at $(date)"
