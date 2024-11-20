dh<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Portfolio</title>
    <link rel="stylesheet" href="..\css\PHP.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5 mb-5" style="height: auto; width: 750px;">
    <h1 class="h-Tag fw-bold">PHP Portfolio</h1>
    <p>24.11.15 - 24.11.20</p>
    <img src="..\img\PHP\PHP.png" class="img-fluid" alt="...">
    <div class="d-flex mt-2">
      <a href="https://github.com/leeys951006/PHP-portfolio.git" class="text-decoration-none">GitHub</a>
      <!-- <a href="http://" class="text-decoration-none ms-2">Notion</a> -->
    </div>
    <br>
    <h1 class="h-Tag fw-bold">SKILLS</h1>
    <div class="d-flex mt-2">
        <span class="badge rounded-pill text-bg-warning fw-normal ">PHP</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">Bootstrap</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">Codeigniter</span>
        
    </div>

    <h1 class="h-Tag fw-bold mt-4">담당했던 기능</h1>
    <li class="li-cont">상단 탭 메뉴를 통해 사용자들이 직관적으로 원하는 페이지로 쉽게 이동할 수 있도록 구성했습니다.</li>
    <li class="li-cont">이력서를 한눈에 보기 쉽도록 디자인하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">주요기능</h1>
    <li class="li-cont">버튼을 누르면 해당 페이지로 바로 이동이 되게 설정하였습니다.</li>
    <li class="li-cont">프로젝트별로 한눈에 보기 쉽게 설정하였습니다.</li>
    <li class="li-cont">포트폴리오 사이트 하나로 Notion,Github 등 전체적인 정보를 얻을 수 있게 설정하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">작업이미지 갤러리</h1>

      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..\img\PHP\PHP.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PHP\PHP1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PHP\PHP2.png" class="d-block w-100" alt="...">
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