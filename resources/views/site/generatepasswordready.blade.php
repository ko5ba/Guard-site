<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генерация пароля - Guard</title>
</head>
<body>
    <section>
        <header>
            <div>
                <h1>Ваш пароль готов!</h1>
            </div>
        </header>
    </section>
    <section>
        <article>
            <div>
                <p>{{ $password }}</p>
            </div>
            <div>
                <a href="{{ route('generate-password.index') }}">Назад</a>
            </div>
        </article>
    </section>
    <section>
        <footer>

        </footer>
    </section>
</body>
</html>