#!/bin/bash

# Check if the required arguments are provided
if [ "$#" -ne 2 ]; then
    echo "Usage: $0 <path_to_root> <app_name>"
    exit 1
fi

# Extract arguments
path_to_root="$1"
app_name="$2"

# Move to the root directory where you want to create the new Laravel app
cd $path_to_root

# Install Laravel using Composer
composer create-project --prefer-dist laravel/laravel "$app_name"
