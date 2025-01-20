<canvas id="courseChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('courseChart').getContext('2d');
    var courseChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($courses->pluck('name')),
            datasets: [{
                label: 'Jumlah User',
                data: @json($courses->pluck('users_count')),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        }
    });
</script>
