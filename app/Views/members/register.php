<!DOCTYPE html>
<html>
<head>
    <title>회원가입</title>
</head>
<body>
    <h1>회원가입</h1>

    <?php if (session()->get('errors')): ?>
        <ul>
            <?php foreach (session()->get('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="/register">
        <?= csrf_field() ?>
        <label>이메일</label>
        <input type="email" name="mb_email" value="<?= old('mb_email') ?>" required><br>

        <label>비밀번호</label>
        <input type="password" name="mb_password" required><br>

        <button type="submit">회원가입</button>
    </form>
</body>
</html>
