<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
  <p>Здравствуйте, {{ $user->login }}!</p>
  <p>Для подтверждения почты перейдите по ссылке:</p>
  <a href="{{ url('/verify/' . $user->email_verification_token) }}">
    Подтвердить Email
  </a>
</body>
</html>
