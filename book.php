<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glow Light Green Border and Shadow Button</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    .glow-btn {
      display: inline-block;
      padding: 15px 30px;
      font-size: 10px;
      color: #fff;
      background-color: #8cc84b; /* Light Green Background Color */
      border: 2px solid #8cc84b; /* Light Green Border Color */
      border-radius: 5px;
      position: relative;
      overflow: hidden;
      cursor: pointer;
      box-shadow: 0 0 10px rgba(140, 200, 75, 0); /* Initial box shadow with no glow */
      transition: box-shadow 0.3s ease-out, background-color 0.3s ease-out;
    }

    .glow-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 0;
      background-color: #8cc84b; /* Light Green Color */
      border-radius: 5px;
      opacity: 0;
      transition: width 0.10s ease-out, height 0.3s ease-out, opacity 0.3s ease-out;
    }

    .glow-btn:hover::before {
      width: 100%;
      height: 100%;
      opacity: 0.5;
    }

    .glow-btn:hover {
      background-color: #8cc84b; /* Change background color on hover */
      box-shadow: 0 0 20px rgba(140, 200, 75, 0.5); /* Add a subtle glowing box shadow on hover */
    }
  </style>
</head>
<body>
  <button class="glow-btn">Click me</button>
</body>
</html>
