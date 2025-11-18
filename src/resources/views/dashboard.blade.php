{{-- resources/views/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ダッシュボード | 体重管理アプリ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">体重管理アプリ</a>
        <div class="d-flex">
            <span class="navbar-text text-white me-3">
                {{ Auth::user()->name }} さん
            </span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">ログアウト</button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h2 class="mb-4">ダッシュボード</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <p>こんにちは、<strong>{{ Auth::user()->name }}</strong> さん！</p>
            <p>今日は {{ now()->format('Y年m月d日') }} です。</p>

            <hr>

            {{-- 任意のリンク例（体重記録機能） --}}
            <div class="list-group">
                <a href="{{ route('weight_logs.index') }}" class="list-group-item list-group-item-action">
                    体重記録一覧を見る
                </a>
                <a href="{{ route('weight_logs.create') }}" class="list-group-item list-group-item-action">
                    新しい体重を記録する
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>