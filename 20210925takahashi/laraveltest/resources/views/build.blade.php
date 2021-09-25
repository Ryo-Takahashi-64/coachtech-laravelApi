<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel入門確認テスト</title>
</head>
<body>
  @if($num === 0)
    <p>建物です</p>
  @else
    <p>{{'部屋番号は' . $num . 'です'}}</p>
  @endif
</body>
</html>