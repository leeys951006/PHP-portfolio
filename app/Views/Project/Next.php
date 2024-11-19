dh<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next</title>
    <link rel="stylesheet" href="..\css\Next.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5 mb-5" style="height: auto; width: 750px;">
    <h1 class="h-Tag fw-bold">Next.js Portfolio</h1>
    <p>24.09.15 - 24.09.22</p>
    <img src="..\img\Next.js Portfolio.png" class="img-fluid" alt="...">
    <div class="d-flex mt-2">
      <a href="http://" class="text-decoration-none">GitHub</a>
      <a href="http://" class="text-decoration-none ms-2">Notion</a>
    </div>
    <br>
    <h1 class="h-Tag fw-bold">SKILLS</h1>
    <div class="d-flex mt-2">
        <span class="badge rounded-pill text-bg-warning fw-normal ">Tailwind CSS</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">TypeScript</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">React</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">Next.js</span>
    </div>

    <h1 class="h-Tag fw-bold mt-4">담당했던 기능</h1>
    <li class="li-cont">상단 탭 메뉴를 통해 사용자들이 직관적으로 원하는 페이지로 쉽게 이동할 수 있도록 구성했습니다.</li>
    <li class="li-cont">마우스 포인터 옆에 설명을 넣어 사용자가 쉽게 알 수 있도록 설정하였습니다.</li>
    <li class="li-cont">오른쪽 하단 버튼을 클릭하면 페이지 상단으로 이동하는 버튼을 생성하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">주요기능</h1>
    <li class="li-cont">이메일을 클릭하면 복사가 되도록 설정하였습니다.</li>
    <li class="li-cont">사용자가 이미지를 쉽게 볼 수 있도록 설정하였습니다.</li>
    <li class="li-cont">포트폴리오 사이트 하나로 Notion,Github,PDF 등 전체적인 정보를 얻을 수 있게 설정하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">작업이미지 갤러리</h1>

      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..\img\Next\포폴1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Next\포폴2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Next\포폴3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Next\포폴4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Next\포폴5.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Next\포폴6.png" class="d-block w-100" alt="...">
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