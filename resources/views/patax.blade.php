<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Make Payment | CloudWorkly</title>
    <style>
        :root {
            --bg: #0f172a;
            /* slate-900 */
            --panel: #111827;
            /* gray-900 */
            --muted: #64748b;
            /* slate-500 */
            --text: #e5e7eb;
            /* gray-200 */
            --accent: #22c55e;
            /* green-500 */
            --ring: rgba(34, 197, 94, .35);
            --danger: #ef4444;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell,
                Noto Sans, Helvetica Neue, Arial, "Apple Color Emoji", "Segoe UI Emoji";
            background: radial-gradient(1200px 600px at 70% -10%, #1f2937, transparent), var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
        }

        .card {
            width: 100%;
            max-width: 900px;
            background: linear-gradient(180deg, rgba(255, 255, 255, .03), rgba(255, 255, 255, .015));
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, .35);
            overflow: hidden;
        }

        .header {
            padding: 20px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(255, 255, 255, .02);
        }

        .title {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: .2px;
        }

        .content {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 22px;
            padding: 22px;
        }

        @media (max-width: 820px) {
            .content {
                grid-template-columns: 1fr;
            }
        }

        .methods {
            display: grid;
            gap: 10px;
        }

        .method {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border: 1px solid rgba(255, 255, 255, .06);
            background: rgba(255, 255, 255, .02);
            border-radius: 14px;
            cursor: pointer;
            transition: .15s ease;
        }

        .method:hover {
            border-color: rgba(255, 255, 255, .18);
            background: rgba(255, 255, 255, .04);
        }

        .method input {
            accent-color: var(--accent);
            width: 18px;
            height: 18px;
        }

        .method .label {
            font-weight: 600;
        }

        .muted {
            color: var(--muted);
            font-size: 12px;
        }

        .panel {
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: 14px;
            padding: 18px;
            background: rgba(255, 255, 255, .02);
        }

        .row {
            display: grid;
            gap: 12px;
            grid-template-columns: 1fr 1fr;
        }

        @media (max-width: 520px) {
            .row {
                grid-template-columns: 1fr;
            }
        }

        .field {
            display: grid;
            gap: 6px;
        }

        .field label {
            font-size: 12px;
            color: var(--muted);
        }

        .field input,
        .field select,
        .field textarea {
            padding: 12px 12px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, .10);
            background: rgba(17, 24, 39, .65);
            color: var(--text);
            outline: none;
            transition: border .15s, box-shadow .15s;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px var(--ring);
        }

        .hint {
            font-size: 11px;
            color: var(--muted);
        }

        .hidden {
            display: none !important;
        }

        .footer {
            padding: 20px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(255, 255, 255, .02);
        }

        .btn {
            appearance: none;
            border: 0;
            border-radius: 12px;
            padding: 12px 16px;
            font-weight: 700;
            cursor: pointer;
            background: linear-gradient(180deg, #22c55e, #16a34a);
            color: white;
            box-shadow: 0 10px 20px rgba(22, 163, 74, .35);
        }

        .btn:disabled {
            opacity: .6;
            cursor: not-allowed;
            box-shadow: none;
        }

        .error {
            color: var(--danger);
            font-size: 12px;
            margin-top: 4px;
        }

        .success {
            color: #22c55e;
            font-size: 14px;
            font-weight: 700;
        }

        .badge {
            font-size: 11px;
            padding: 2px 8px;
            border-radius: 999px;
            background: rgba(34, 197, 94, .15);
            color: #34d399;
            border: 1px solid rgba(34, 197, 94, .35);
        }

        .stack {
            display: grid;
            gap: 10px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <form id="checkout" class="card" autocomplete="on">
        <div class="header">
            <div class="title">Make Payment</div>
            <div class="badge">Secure Payment TLS</div>
        </div>

        <div class="content">
            <!-- LEFT: Payment method selection -->
            <div class="methods">

                <div class="hint">The System automatically selects the best payment method for your location.</div>
                <div class="muted">Select a payment method</div>
                <label class="method">
                    <input type="radio" name="method" value="card" />
                    <img src="/assets/images/visa.png" width="20%">

                    <span class="muted">Visa, Mastercard</span>
                </label>

                <label class="method">
                    <input type="radio" name="method" value="paypal" />
                    <img src="/assets/images/paypal.png" width="20%">
                    <span class="muted">Pay via PayPal account</span>
                </label>

                <label class="method">
                    <input type="radio" name="method" value="mpesa" checked />
                    <img src="/assets/images/mpesa.png" width="20%">
                    <span class="muted">Pay via Safaricom</span>
                </label>

                <div class="panel stack">
                    <div class="field">
                        <label for="amount">Amount</label>
                        <input id="amount" name="amount" type="number" min="1" step="0.01" placeholder="e.g. 1000" value="3000" required />
                        <div class="hint">Total payable amount (KES).</div>
                    </div>
                    <div class="field">
                        <label for="email">Email for receipt</label>
                        <input id="email" name="email" type="email" placeholder="you@example.com" value="{{Auth::user()->email}}" required />
                    </div>
                </div>
            </div>

            <!-- RIGHT: Dynamic method details -->
            <div class="panel">
                <!-- CARD FIELDS -->
                <div id="cardFields" class="stack hidden">
                    <div class="muted">Enter your card details</div>
                    <div class="field">
                        <label for="cardNumber">Card number</label>
                        <input id="cardNumber" name="cardNumber" inputmode="numeric" autocomplete="cc-number" placeholder="1234 5678 9012 3456" maxlength="19" />
                        <div class="hint">We do not store card numbers.</div>
                    </div>
                    <div class="row">
                        <div class="field">
                            <label for="cardExpiry">Expiry (MM/YY)</label>
                            <input id="cardExpiry" name="cardExpiry" inputmode="numeric" placeholder="MM/YY" maxlength="5" />
                        </div>
                        <div class="field">
                            <label for="cardCvc">CVC</label>
                            <input id="cardCvc" name="cardCvc" inputmode="numeric" placeholder="123" maxlength="4" />
                        </div>
                    </div>
                    <div class="field">
                        <label for="cardName">Name on card</label>
                        <input id="cardName" name="cardName" placeholder="Full name" />
                    </div>
                </div>

                <!-- PAYPAL INFO -->
                <div id="paypalFields" class="stack hidden">
                    <div class="muted">You will be redirected to PayPal to complete your payment.</div>
                    <div class="field">
                        <label for="ppNote">Note (optional)</label>
                        <input id="ppNote" name="ppNote" placeholder="Any note for your order" />
                    </div>

                </div>

                <!-- MPESA INFO -->
                <div id="mpesaFields" class="stack">
                    <div class="muted">M‑Pesa payment instructions</div>
                    <ol class="hint" style="line-height:1.6">
                        <li>Go to <strong>M‑Pesa</strong> on your phone.</li>
                        <li>Select <strong>Lipa na M‑Pesa</strong> → <strong>Buy Goods and Services</strong>.</li>
                        <li>Enter <strong>Till Number</strong>: <strong id="tillNumber">6414711</strong>.</li>
                        <li>Enter <strong>Amount</strong>: 3000</li>
                        <li>Confirm and complete the payment.</li>
                    </ol>
                    <div class="row">
                        <div class="field">
                            <label for="mpesaPhone">Phone number used (Safaricom)</label>
                            <input id="mpesaPhone" name="mpesaPhone" placeholder="07XXXXXXXX" />
                            <div class="hint">We’ll use this to match your payment.</div>
                        </div>
                        <div class="field">
                            <label for="mpesaCode">M‑Pesa confirmation code</label>
                            <input id="mpesaCode" name="mpesaCode" placeholder="e.g. QFT12ABC34" />
                        </div>
                    </div>
                </div>

                <div id="errors" class="error hidden"></div>
                <div id="success" class="success hidden"></div>
            </div>
        </div>

        <div class="footer">
            <div class="muted">By clicking Pay, you agree to our Terms and Privacy Policy.</div>
            <button class="btn" id="payBtn" type="submit">Pay</button>
        </div>
    </form>

    <script>
        const methodRadios = document.querySelectorAll('input[name="method"]');
        const cardFields = document.getElementById('cardFields');
        const paypalFields = document.getElementById('paypalFields');
        const mpesaFields = document.getElementById('mpesaFields');
        const errors = document.getElementById('errors');
        const success = document.getElementById('success');
        const amount = document.getElementById('amount');
        const tillNumber = document.getElementById('tillNumber');

        function setVisible(method) {
            cardFields.classList.toggle('hidden', method !== 'card');
            paypalFields.classList.toggle('hidden', method !== 'paypal');
            mpesaFields.classList.toggle('hidden', method !== 'mpesa');
            errors.classList.add('hidden');
            success.classList.add('hidden');
        }

        methodRadios.forEach(r => r.addEventListener('change', e => alert("System Detected M-Pesa as Your regions payment Method")));

        // Basic input helpers (masking-ish)
        const cardNumber = document.getElementById('cardNumber');
        const cardExpiry = document.getElementById('cardExpiry');
        const cardCvc = document.getElementById('cardCvc');
        if (cardNumber) {
            cardNumber.addEventListener('input', () => {
                let v = cardNumber.value.replace(/\D/g, '').slice(0, 16);
                cardNumber.value = v.replace(/(.{4})/g, '$1 ').trim();
            });
        }
        if (cardExpiry) {
            cardExpiry.addEventListener('input', () => {
                let v = cardExpiry.value.replace(/\D/g, '').slice(0, 4);
                if (v.length > 2) v = v.slice(0, 2) + '/' + v.slice(2);
                cardExpiry.value = v;
            });
        }

        // Minimal validation per method
        function validate(form) {
            const formData = new FormData(form);
            const method = formData.get('method');
            const amt = parseFloat(formData.get('amount'));
            const email = formData.get('email');

            if (!amt || amt <= 0) return 'Enter a valid amount.';
            if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return 'Enter a valid email.';

            if (method === 'card') {
                if (!/^(\d{4} ){3}\d{4}$/.test(cardNumber.value)) return 'Enter a valid card number.';
                if (!/^\d{2}\/\d{2}$/.test(cardExpiry.value)) return 'Enter expiry as MM/YY.';
                if (!/^\d{3,4}$/.test(cardCvc.value)) return 'Enter a valid CVC.';
            }
            if (method === 'mpesa') {
                const phone = (formData.get('mpesaPhone') || '').trim();
                const code = (formData.get('mpesaCode') || '').trim();
                if (!/^0\d{9}$/.test(phone)) return 'Enter a valid Safaricom number (e.g. 07XXXXXXXX).';
                if (!/^[A-Z0-9]{8,12}$/.test(code)) return 'Enter a valid M‑Pesa confirmation code.';
            }
            return '';
        }

        document.getElementById('checkout').addEventListener('submit', (e) => {
            e.preventDefault();
            const method = document.querySelector('input[name="method"]:checked').value;
            const err = validate(e.target);
            if (err) {
                errors.textContent = err;
                errors.classList.remove('hidden');
                success.classList.add('hidden');
                return;
            }
            errors.classList.add('hidden');

            // Demo success – replace with your integration or redirect
            const amt = amount.value;
            const msg =
                method === 'card' ? `Card payment initiated for ${amt}.` :
                method === 'paypal' ? `Redirecting to PayPal for ${amt}.` :
                `M‑Pesa code received. We will verify your payment of ${amt} to Till ${tillNumber.textContent}.`;

            success.textContent = msg;
            success.classList.remove('hidden');

            // Example payload you might send to your backend
            const payload = Object.fromEntries(new FormData(e.target).entries());
            payload.method = method;
            // console.log('Submit payload', payload);

            fetch("{{ route('payments.tax') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(payload)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: "success",
                            title: "Payment Saved",
                            text: data.message,
                            timer: 3000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = "/withdraw"; // redirect after success
                        });
                    } else {
                        errors.textContent = "Something went wrong.";
                        errors.classList.remove('hidden');
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    errors.textContent = "Failed to save payment.";
                    errors.classList.remove('hidden');
                });

        });
    </script>
</body>

</html>