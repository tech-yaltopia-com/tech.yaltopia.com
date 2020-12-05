#!/bin/zsh

vared -p "Enter commit message: " -c message

printf "\e[33m\nBuilding project...\e[39m\n"
hugo -d ../tech-yaltopia-com.github.io

printf "\\e[33m\nPushing to YOUR_GITHUB_USERNAME.github.io repository...\e[39m\n\n"
cd ../tech-yaltopia-com.github.io
git add .
git commit -m "$message"
git push origin master
printf "\e[32m\nSuccessfully deployed the website!\e[39m"

printf "\e[33m\n\nNow pushing latest changes to PERSONAL_REPOSITORY_NAME repository...\e[39m\n\n"
cd ../tech.yaltopia.com
git add .
git commit -m "$message"
git push origin master
printf "\033[0;32m\nSuccessfully pushed changes to the repository!\e[39m\n"
