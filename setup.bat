@echo off
echo Starting DataAI Konsult WordPress Development Environment...
echo.

echo Pulling Docker images and starting containers...
docker-compose up -d

echo.
echo Waiting for WordPress to be ready...
timeout /t 30 /nobreak >nul

echo.
echo Setup complete! You can now access:
echo.
echo WordPress Website: http://localhost:8080
echo WordPress Admin: http://localhost:8080/wp-admin
echo phpMyAdmin: http://localhost:8081
echo.
echo To stop the environment, run: docker-compose down
echo.
pause