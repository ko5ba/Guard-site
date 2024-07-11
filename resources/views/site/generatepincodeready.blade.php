<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генерация пин-кода - Guard</title>
</head>
<body>
    <section>
        <header>
            <div>
                <h1>Ваш пин-код готов!</h1>
            </div>
        </header>
    </section>
    <section>
        <article>
            <div>
                <p>{{ $pinCode }}</p>
            </div>
        </article>
    </section>
    <section>
        <footer>
            <div>
                <a href="{{ route('generate-pin-code.index') }}">Назад</a>
            </div>
        </footer>
    </section>
</body>
</html>