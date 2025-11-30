@echo off
echo ========================================
echo   Preparing Laravel for InfinityFree
echo ========================================
echo.

echo Step 1: Clearing all caches...
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo.
echo Step 2: Optimizing for production...
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo.
echo Step 3: Creating deployment package info...
echo.
echo ========================================
echo   Files Ready for Upload!
echo ========================================
echo.
echo IMPORTANT: Upload these folders to htdocs/:
echo   - app/
echo   - bootstrap/
echo   - config/
echo   - database/
echo   - public/
echo   - resources/
echo   - routes/
echo   - storage/
echo   - vendor/
echo.
echo And these files:
echo   - .htaccess
echo   - artisan
echo   - composer.json
echo   - composer.lock
echo   - server.php
echo.
echo DO NOT UPLOAD:
echo   - .git/
echo   - node_modules/
echo   - tests/
echo   - .env (create manually on server)
echo.
echo ========================================
echo Read DEPLOYMENT_GUIDE_INFINITYFREE.md
echo for complete instructions!
echo ========================================
echo.
pause
