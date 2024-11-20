dh<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>
    <link rel="stylesheet" href="..\css\ERP System.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5 mb-5" style="height: auto; width: 750px;">
    <h1 class="h-Tag fw-bold">ERP System</h1>
    <p>24.07.15 - 24.08.14</p>
    <img src="..\img\ERP_main.png" class="img-fluid" alt="...">
    <div class="d-flex mt-2">
      <a href="https://github.com/leeys951006/KDT-IaaS-2-ProjectA-1team.git" class="text-decoration-none">GitHub</a>
      <a href="https://kongukjae.notion.site/031dbe5061414b209e756b27124b3abf?pvs=4" class="text-decoration-none ms-2">Notion</a>
    </div>
    <br>
    <h1 class="h-Tag fw-bold">SKILLS</h1>
    <div class="d-flex mt-2">
        <span class="badge rounded-pill text-bg-warning fw-normal ">Tailwind CSS</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">TypeScript</span>
        <span class="badge rounded-pill text-bg-warning fw-normal ms-2">Python</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">Next.js</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">FastAPI</span>
        <span class="badge rounded-pill text-bg-info fw-normal ms-2">SQLite</span>
    </div>

    <h1 class="h-Tag fw-bold mt-4">담당했던 기능</h1>
    <li class="li-cont">조회테이블의 표를 만들었습니다.</li>
    <li class="li-cont">로그인 기능을 구현하였습니다.</li>
    <li class="li-cont">언어 설정을 구현하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">주요기능</h1>
    <li class="li-cont">검색을 통해 DB의 내용을 조회할 수 있습니다.</li>
    <li class="li-cont">DB의 컬럼을 커스텀이 가능하게 생성 하였습니다.</li>
    <li class="li-cont">합계기능을 구현하여 해당 열의 합계를 볼 수 있도록 구현하였습니다.</li>

    <h1 class="h-Tag fw-bold mt-4">작업이미지 갤러리</h1>

      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..\img\ERP\git1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\git2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\git3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\git4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\slack1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\slack2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\slack3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\slack4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\slack5.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\slack6.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\figma1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\figma2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\figma3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\figma4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\figma5.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\figma6.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_열추가.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_테이블추가.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_행추가.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_deleted.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_drawio.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_figma.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_google-sheet.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_insert.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_main.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_password.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_setting.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\img\ERP\ERP_template.png" class="d-block w-100" alt="...">
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