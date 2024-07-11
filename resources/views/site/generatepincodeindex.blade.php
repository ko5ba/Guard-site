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
                <h1>Генерация пин-кода</h1>
            </div>
        </header>
    </section>
    <section>
        <article>
            <div>
                <form action="" method="POST">
                    @csrf
                    <div>
                        <label for="pin-code">Введите длину пин-кода: </label>
                        <input id="pin-code" type="number" name="lengthPinCode">
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