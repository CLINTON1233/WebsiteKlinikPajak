<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sederhana</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Font Awesome untuk ikon -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg');
            /* Gambar latar belakang */
            background-size: cover;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            /* Transparan */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .cards {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .card {
            width: calc(33% - 20px);
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            margin-bottom: 0;
        }

        .card .icon {
            font-size: 36px;
            margin-right: 20px;
        }

        .card.blue {
            background-color: #3498db;
            color: #fff;
        }

        .card.green {
            background-color: #2ecc71;
            color: #fff;
        }

        .card.red {
            background-color: #e74c3c;
            color: #fff;
        }

        .card.purple {
            background-color: #9b59b6;
            color: #fff;
        }

        .additional-content {
            text-align: center;
            margin-top: 50px;
        }

        .additional-content p {
            font-size: 18px;
            color: #333;
        }

        .chart-container {
            margin-top: 50px;
            text-align: center;
        }

        .table-container {
            margin-top: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button-container {
            text-align: center;
            margin-top: 50px;
        }

        .button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1 style="color: #333;">Dashboard Sederhana</h1>
        </div>
        <div class="cards">
            <div class="card blue">
                <i class="fas fa-users icon"></i>
                <div>
                    <h2>Total Pengguna</h2>
                    <p>5</p>
                </div>
            </div>
            <div class="card green">
                <i class="fas fa-shopping-cart icon"></i>
                <div>
                    <h2>Total Pesanan</h2>
                    <p>500</p>
                </div>
            </div>
            <div class="card red">
                <i class="fas fa-dollar-sign icon"></i>
                <div>
                    <h2>Total Pendapatan</h2>
                    <p>$10000</p>
                </div>
            </div>
            <div class="card purple">
                <i class="fas fa-chart-bar icon"></i>
                <div>
                    <h2>Statistik Penjualan</h2>
                    <p>Lihat Grafik</p>
                </div>
            </div>
        </div>
        <div class="additional-content">
            <p>Selamat datang di dashboard sederhana ini. Mari jelajahi informasi dan statistik yang disajikan dengan
                jelas dan informatif.</p>
        </div>
        <div class="chart-container">
            <!-- Di sini Anda bisa menambahkan grafik menggunakan library chart.js atau yang lainnya -->
            <h2>Contoh Grafik</h2>
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <div class="table-container">
            <h2>Tabel Data</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Clinton Alfaro</td>
                        <td>30</td>
                        <td>clintonn@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Iskandar Dinata</td>
                        <td>25</td>
                        <td>Dinata@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Marchelia Anatasya</td>
                        <td>19</td>
                        <td>Marchelia@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Jihan Safinatunnaja</td>
                        <td>20</td>
                        <td>JihanS@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Yoel Feliks</td>
                        <td>50</td>
                        <td>Yoel@gmail.com</td>
                    </tr>
                    <!-- Tambahkan baris data tambahan di sini jika diperlukan -->
                </tbody>
            </table>
        </div>
        <div class="button-container">
            <button class="button">Tombol Aksi</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- Library Chart.js untuk grafik -->

    <script>
        // Contoh penggunaan Chart.js untuk membuat grafik
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Penjualan',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: 'rgba(52, 152, 219, 0.5)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 1
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
    </script>

</body>

</html>
