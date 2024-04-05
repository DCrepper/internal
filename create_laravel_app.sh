#!/bin/bash
# Define the GitHub repository URL
github_repo_url="https://github.com/DCrepper/outer.git"

# Create a new directory for the cloned repository

outer_root_folder="../../$1"
mkdir -p $outer_root_folder

# Clone the GitHub repository
git clone $github_repo_url $outer_root_folder
# Check if the required arguments are provided


