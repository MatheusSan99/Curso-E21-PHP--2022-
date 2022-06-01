echo "Commit: $1 $2"
read
git add .
git commit -m "$1: $2"
git pull 
git push || git pull && echo "Boa meu Nobre"