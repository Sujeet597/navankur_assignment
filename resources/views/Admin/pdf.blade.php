
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invoice</title>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .invoice {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  .invoice-header {
    text-align: center;
  }
  .invoice-details {
    margin-top: 20px;
  }
  .invoice-details strong {
    display: inline-block;
    width: 120px;
  }
  .invoice-items {
    margin-top: 20px;
  }
  .item-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
  }
  .item-name, .item-amount {
    flex: 1;
  }
  .total {
    text-align: right;
    margin-top: 20px;
  }
</style>
</head>
<body>
  <div class="invoice">
    <div class="invoice-header">
      <h1>Invoice</h1>
      <h2>Name:- VInay Kumar</h2>
      <Address>32-B Rohini Sector-55, near charminar, NEW DELHI</Address>
      <p>+91-9895435643</p>
      <p>viany@gmail.com</p>
    </div>
    <div class="invoice-details">
      <p><strong>Invoice Number:</strong> INV12345</p>
      <p><strong>Date:</strong> August 20, 2023</p>
    </div>
    <div class="invoice-items">
      <div class="item-row">
        <span class="item-name">Tomato</span>
        <span class="item-amount">450 Rupee</span>
      </div>
      <div class="item-row">
        <span class="item-name">Potato</span>
        <span class="item-amount">300 rupee</span>
      </div>
      <div class="item-row">
        <span class="item-name">Product C</span>
        <span class="item-amount">200 Rupee</span>
      </div>
    </div>
    <div class="total">
      <p><strong>Total:950 Rupee</strong></p>
    </div>
  </div>
</body>
</html>
