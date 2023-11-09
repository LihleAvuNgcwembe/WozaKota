<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
<h2>Hello</h2>
<br><br>
  you have got an email from : {{$contactForm->name}}
  <br><br>

  User details: <br><br>
  Name: {{$contactForm->name}} <br>
  Email: {{$contactForm->email}} <br>
  Phone: {{$contactForm->phone}} <br>
  Subject: {{$contactForm->subject}} <br>
  Message: {{$contactForm->message}} <br><br>

  Thanks
</body>
</html>