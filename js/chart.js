const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    datasets: [{
      label: 'Треккер моего самочувствия',
      data: [9, 8, 7, 9, 10, 4, 8, 9, 10, 6, 1, 3],
      borderWidth: 1,
      borderColor:[
        "green",
        "green",
        "blue",
        "green",
        "green",
        "red",
        "green",
        "green",
        "green",
        "orange",
        "red",
        "red"
      ],
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});