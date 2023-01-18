@echo off
echo Ajout des fichiers...
git add -A
echo Commit en cours... %date% %time%
git commit -m "%date% %time%"
echo Push en cours...
git push -u origin main
echo Fin du push
pause