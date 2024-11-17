<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="..\css\home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh; width: 40vw;">
      <h1 class="fw-bold">이연승</h1>
      <br>
      <div class="container d-flex flex-column justify-content-center align-items-center custom-border" >
        <p>
         <img src="..\img\손.png" alt="인사" class="img-fluid mb-1" style="width: 25px; height: auto;"> 안녕하세요! 신입 개발자 이연승입니다. 
        </p>
        <br>
        <p>PHP,JavaScript,TypeScript 등 여러언어를 경험하고 연구하며</p>
        <p>실력 향상을 위해 꾸준히 노력하고 있습니다.</p>
        <br>
        <p class="fw-bold">DB 활용 경험을 알리고자 로그인 시스템을 구현하였습니다.</p>
        <p class="fw-bold">재미로 테스트 해주시면 감사하겠습니다.</p>
      </div>
      <br>
      <div>
      <div>
        <a href="/Resume" class="btn btn-outline-dark mx-1">Resume</a>
        <a href="/Portfolio" class="btn btn-outline-dark mx-1">Portfolio</a>
    </div>

      </div>
      <br>
      <div>
        <img src="..\img\github.png" alt="github" class="img-fluid mx-1" style="width: 30px; height: auto;">
        <img src="..\img\notion.png" alt="github" class="img-fluid mx-1" style="width: 30px; height: auto;">
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?= $this->endSection() ?>