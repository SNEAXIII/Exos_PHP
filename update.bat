@echo off
echo Ajout des fichiers...
echo __________________________
git add -A
echo Commit en cours... %date% %time%
echo __________________________
git commit -m "%date% %time%"
echo __________________________
echo Push en cours...
echo __________________________
git push -u origin main
echo __________________________
echo Fin du push
echo __________________________
pause