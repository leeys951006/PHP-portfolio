h<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanT</title>
    <link rel="stylesheet" href="..\css\PlanT.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5 mb-5" style="height: auto; width: 750px;">
    <h1 class="h-Tag fw-bold">여행 공유 사이트</h1>
    <p>24.08.23 - 진행중</p>
    <img src="..\img\PlanT main.png" class="img-fluid" alt="...">
    <div class="d-flex mt-2">
      <a href="http://" class="text-decoration-none">GitHub</a>
      <a href="http://" class="text-decoration-none ms-2">Notion</a>
    </div>
    <br>
    <h1 class="h-Tag fw-bold">SKILLS</h1>
    <div class="d-flex mt-2">
        <span class="badge rounded-pill text-bg-warning fw-normal ">Tailwind CSS</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">TypeScript</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">Python</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">React</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">Next.js</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">Nest.js</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">MySQL</span>
    </div>

    <h1 class="h-Tag fw-bold mt-4">담당했던 기능</h1>
    <li class="li-cont">반응형 디자인을 적극적으로 고려하여 다양한 화면 크기에서도 일관된 사용자 경험을 제공하도록 스타일 작업을 진행했습니다.</li>
    <li class="li-cont">상단 탭 메뉴를 통해 사용자들이 직관적으로 원하는 페이지로 쉽게 이동할 수 있도록 구성했습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">주요기능</h1>
    <li class="li-cont">계획별로 양식을 지정하여 편리하게 계획을 설계할 수 있도록 구현하였습니다.</li>
    <li class="li-cont">소셜 로그인 기능을 구현하여 사용에 편리함을 추가하였습니다.</li>
    <li class="li-cont">개인과 공유 계획을 나눠 사용의 편리함을 추가하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">작업이미지 갤러리</h1>

      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..\img\PlanT\PlanT 고려사항.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 디자인설계1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 디자인설계2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 디자인설계3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 모바일 설계1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 모바일 설계2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 문제해결.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 프로젝트 구성1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 프로젝트 구성2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT 프로젝트 구성3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT login.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT login2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT login3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT login4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT main.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT main2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT main3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT main4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT MySQL1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\PlanT\PlanT MySQL2.png" class="d-block w-100" alt="...">
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