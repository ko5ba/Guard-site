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
                <h1>Страница генерации пароля</h1>
            </div>
        </header>
    </section>
    <section>
        <article>
            <div>
                <form action="{{ route('generate-password.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="password">Введите длину пароля: </label>
                        <input id="password" type="text" name="lengthPassword">
                    </div>
                    <div>
                        <button type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </article>
    </section>
    <section>
        <footer>

        </footer>
    </section>
</body>
</html>