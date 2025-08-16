<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <title>M-Pesa Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .payment-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            color: #2e7d32;
            text-align: center;
        }

        .till-number {
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
            margin: 10px 0;
        }

        .amount {
            font-size: 1.2em;
            font-weight: bold;
            color: #d32f2f;
            text-align: center;
        }

        form {
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        button {
            width: 100%;
            background: #2e7d32;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
        }

        button:hover {
            background: #256428;
        }
    </style>
</head>

<body>
    <div class="payment-box">
        <h2>M-Pesa Till Payment</h2>
        <p class="amount">Amount: KES 1,500</p>
        <p class="till-number">Till Number: <span style="color:#1565c0;">6414711</span></p>
        <hr>
        <h3>How to Pay:</h3>
        <ol>
            <li>Go to <strong>M-Pesa</strong> on your phone.</li>
            <li>Select <strong>Lipa na M-Pesa</strong>.</li>
            <li>Select <strong>Buy Goods and Services</strong>.</li>
            <li>Enter Till Number: <strong>6414711</strong>.</li>
            <li>Enter Amount: <strong>1500</strong>.</li>
            <li>Enter your M-Pesa PIN.</li>
            <li>Press OK to confirm.</li>
        </ol>

        <hr>
        <h3>Enter Your Payment Details:</h3>
        <form method="POST" action="{{route('log.pay')}}">
            @csrf
            <input type="text" name="transaction_code" placeholder="M-Pesa Transaction Code" required>
            <input type="tel" name="phone_number" placeholder="Phone Number Used" required pattern="^(?:\+254|0)[17]\d{8}$" title="Enter a valid Kenyan phone number">
            <button type="submit">Submit Payment Details</button>
        </form>
    </div>
</body>

</html>