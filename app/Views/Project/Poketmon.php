dh<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poketmon</title>
    <link rel="stylesheet" href="..\css\Poketmon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5 mb-5" style="height: auto; width: 750px;">
    <h1 class="h-Tag fw-bold">랜덤 포켓몬</h1>
    <p>24.05.11 - 24.05.13</p>
    <img src="..\img\포켓몬.png" class="img-fluid" alt="...">
    <div class="d-flex mt-2">
      <a href="https://github.com/leeys951006/Pokemon.git" class="text-decoration-none">GitHub</a>
      <a href="https://nifty-mountain-1e6.notion.site/24-05-11-24-05-13-5ec60ad525b14e139fff5f5ba9da24da?pvs=4" class="text-decoration-none ms-2">Notion</a>
    </div>
    <br>
    <h1 class="h-Tag fw-bold">SKILLS</h1>
    <div class="d-flex mt-2">
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">JavaScript</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">Node.js</span>
    </div>

    <h1 class="h-Tag fw-bold mt-4">담당했던 기능</h1>
    <li class="li-cont">포켓몬 이름을 json파일로 가져와서 작업하였습니다.</li>
    <li class="li-cont">포켓몬 이미지는 포켓몬 사이트에서 이미지 번호에 반복문을 사용하여 설정하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">주요기능</h1>
    <li class="li-cont">버튼을 누르면 랜덤으로 포켓몬이 나오게 설정하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">작업이미지 갤러리</h1>

      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..\img\Poketmon\포켓몬.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Poketmon\포켓몬1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Poketmon\포켓몬2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Poketmon\포켓몬3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>

     
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?= $this->endSection() ?>