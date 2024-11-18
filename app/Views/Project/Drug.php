dh<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug</title>
    <link rel="stylesheet" href="..\css\Drug.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5 mb-5" style="height: auto; width: 750px;">
    <h1 class="h-Tag fw-bold">영양제 조절 사이트</h1>
    <p>24.07.15 - 24.08.28</p>
    <img src="..\img\영양제.png" class="img-fluid" alt="...">
    <div class="d-flex mt-2">
      <a href="http://" class="text-decoration-none">GitHub</a>
      <a href="http://" class="text-decoration-none ms-2">Notion</a>
    </div>
    <br>
    <h1 class="h-Tag fw-bold">SKILLS</h1>
    <div class="d-flex mt-2">
        <span class="badge rounded-pill text-bg-warning fw-normal ">HTML</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">CSS</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">JavaScript</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">SQLite</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">Node.js</span>
    </div>

    <h1 class="h-Tag fw-bold mt-4">담당했던 기능</h1>
    <li class="li-cont">반응형 디자인을 적극적으로 고려하여 다양한 화면 크기에서도 일관된 사용자 경험을 제공하도록 스타일 작업을 진행했습니다.</li>
    <li class="li-cont">하단 탭 메뉴를 통해 사용자들이 직관적으로 원하는 페이지로 쉽게 이동할 수 있도록 구성했습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">주요기능</h1>
    <li class="li-cont">설정한 성별,나이에 따라 영양제 기준 셋팅이 변경되게 하였습니다.</li>
    <li class="li-cont">현재 복용중인 영양제 용량을 입력하면 부족 또는 과섭취 부분을 한눈에 보기쉽도록 바 형식으로 나타내었습니다.</li>
    <li class="li-cont">영양분 정보 탭을 만들어서 영양분에 대한 정보를 알기 쉽도록 만들었습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">작업이미지 갤러리</h1>

      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..\img\Drug\영양분 정보.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\영양제 설계1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 디자인설계2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 디자인설계3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 모바일 설계1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 모바일 설계2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 문제해결.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 프로젝트 구성1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 프로젝트 구성2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT 프로젝트 구성3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT login.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT login2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT login3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT login4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT main.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT main2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT main3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT main4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT MySQL1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\Drug\PlanT MySQL2.png" class="d-block w-100" alt="...">
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