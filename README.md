
# BASE URL
    https://api.daykundi.com/home

# generate key
    php artisan key:generate

# docs
    https://documenter.getpostman.com/view/7130683/2s935hRSo6

https://quickchart.io/documentation/chart-js/custom-pie-doughnut-chart-labels/

# auto commit
    cd /Users/faiz/projects/monitoring

    while true; do
    changes=$(git diff --name-only HEAD)

    if [ ! -z "$changes" ]; then
        git add .

        timestamp=$(date +%Y-%m-%d-%H-%M-%S)
        git commit -m "Auto-commit at $timestamp"

        git push origin
    fi

    sleep 5
    done