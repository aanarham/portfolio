@echo off
echo Configuring Git...
git config user.name "aanarham"
git config user.email "aan.croco@gmail.com"

echo.
echo Committing changes...
git commit -m "Convert to Laravel 8 and update styling - Remove border from main image"

echo.
echo Setting up remote repository...
git branch -M main
git remote add origin https://github.com/aanarham/portfolio.git

echo.
echo Pushing to GitHub...
git push -u origin main --force

echo.
echo Done! Your code has been pushed to GitHub.
pause
