<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('dropdown-icon.png') no-repeat right center;
            background-size: 15px;
            padding-right: 30px;
        }

        .form-group input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #555;
        }

        .form-group input[type="submit"]:focus {
            outline: none;
        }

        .success-message {
            color: #4caf50;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .error-message {
            color: #f44336;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>


<body style="background-color: #252568;">
    <div class="container" class="container-xxl bg-white p-0">
        <h1>Online Order</h1>
        <form action="{{ route('pesanan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="menu">Menu:</label>
                <select id="menu" name="menu" required>
                    <option value="">Select Menu</option>
                    <option value="Rendang sapi">Rendang Sapi</option>
                    <option value="Dendeng">Dendeng</option>
                    <option value="Gulai Nangka padang">Gulai Nangka Padang</option>
                    <option value="Kalio Ayam Padang">Kalio Ayam Padang</option>
                </select>
            </div>
            <div class="form-group">
                <label for="drink">Drink:</label>
                <select id="drink" name="drink" required>
                    <option value="">Select Drink</option>
                    <option value="Es Cendol">Es Cendol</option>
                    <option value="Aia Aka">Aia Aka</option>
                    <option value="Es Tebak">Es Tebak</option>
                    <option value="Kawa Daun">Kawa Daun</option>
                    <option value="Jus pinang">Jus pinang</option>
                    <option value="Teh Talua">Teh Talua</option>
                    <option value="Sekoteng">Sekoteng</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Place Order">
            </div>
        </form>
        <div id="success-message" class="success-message" style="display: none;">Order placed successfully!</div>
        <div id="error-message" class="error-message" style="display: none;">Failed to place order. Please try again
            later.</div>
    </div>
    <div class="footer" style="background-color: rgba(26, 26, 120, 0.8); color: white;">
        <a href="/service" style="color: white;">Kembali ke Service</a><br>
    </div>
    <script>
        const form = document.getElementById('order-form');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Simulate form submission
            setTimeout(function() {
                // Display success or error message
                const isSuccess = Math.random() < 0.8; // 80% chance of success
                if (isSuccess) {
                    successMessage.style.display = 'block';
                    errorMessage.style.display = 'none';
                } else {
                    successMessage.style.display = 'none';
                    errorMessage.style.display = 'block';
                }

                // Reset form fields
                form.reset();
            }, 1000);
        });
    </script>
</body>

</html>
