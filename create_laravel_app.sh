#!/bin/bash
# Define the GitHub repository URL
github_repo_url="https://github.com/DCrepper/outer.git"
# Create a new directory for the cloned repository
# Clone the GitHub repository
git clone $github_repo_url ../../$1
