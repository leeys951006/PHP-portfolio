<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="..\css\Project.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5 mb-5" style="height: auto; width: 750px;">
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
      <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked value="all">
      <label class="btn btn-outline-dark" for="btnradio1">ALL</label>

      <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="solo">
      <label class="btn btn-outline-dark" for="btnradio2">Solo</label>

      <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" value="team">
      <label class="btn btn-outline-dark" for="btnradio3">Team</label>
    </div>

    <div class="mt-3 fs-6 fw-semibold">
      <p>하단의 프로젝트를 클릭하시면 프로젝트의 내용을 보실 수 있습니다.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-0" id="cardContainer">
      <div class="col" data-category="solo" data-url="/Project/PHP">
        <div class="card h-100">
          <img src="..\img\PHP Portfolio.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">PHP Portfolio</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">PHP</span>
              <span class="badge rounded-pill text-bg-warning">Bootstrap</span>
              <br>
              <span class="badge rounded-pill text-bg-info">Codeigniter</span>
              <span class="badge rounded-pill text-bg-info">MySQL</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">24.11.15 - </small>
          </div>
        </div>
      </div>
      <div class="col" data-category="solo" data-url="/Project/Next">
        <div class="card h-100">
          <img src="..\img\Next.js Portfolio.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Next.js Portfolio</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">Tailwind CSS</span>
              <span class="badge rounded-pill text-bg-warning">TypeScript</span>
              <br>
              <span class="badge rounded-pill text-bg-info">React</span>
              <span class="badge rounded-pill text-bg-info">Next.js</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">24.09.15 - 24.09.22</small>
          </div>
        </div>
      </div>
      <div class="col" data-category="solo" data-url="/Project/Codeigniter">
        <div class="card h-100">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Codeigniter 게시판</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">PHP</span>
              <span class="badge rounded-pill text-bg-warning">Bootstrap</span>
              <br>
              <span class="badge rounded-pill text-bg-info">Codeigniter</span>
              <span class="badge rounded-pill text-bg-info">MySQL</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col" data-category="solo" data-url="/Project/PlanT">
        <div class="card h-100">
          <img src="..\img\PlanT main.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">여행 공유 사이트</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">Tailwind CSS</span>
              <span class="badge rounded-pill text-bg-warning">TypeScript</span>
              <span class="badge rounded-pill text-bg-warning">Python</span>
              <br>
              <span class="badge rounded-pill text-bg-info">React</span>
              <span class="badge rounded-pill text-bg-info">Next.js</span>
              <span class="badge rounded-pill text-bg-info">Nest.js</span>
              <span class="badge rounded-pill text-bg-info">MySQL</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">24.08.23 - 진행중</small>
          </div>
        </div>
      </div>
      <div class="col" data-category="solo" data-url="/Project/Drug">
        <div class="card h-100">
          <img src="..\img\영양제.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">영양제 조절 사이트</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">HTML</span>
              <span class="badge rounded-pill text-bg-warning">CSS</span>
              <span class="badge rounded-pill text-bg-warning">JavaScript</span>
              <br>
              <span class="badge rounded-pill text-bg-info">SQLite</span>
              <span class="badge rounded-pill text-bg-info">Node.js</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">24.07.15 - 24.08.28</small>
          </div>
        </div>
      </div>
      <div class="col" data-category="solo" data-url="/Project/Stress">
        <div class="card h-100">
          <img src="..\img\스트레스 blog.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">스트레스 블로그</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">HTML</span>
              <span class="badge rounded-pill text-bg-warning">CSS</span>
              <span class="badge rounded-pill text-bg-warning">JavaScript</span>
              <br>
              <span class="badge rounded-pill text-bg-info">Node.js</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">24.05.24 - 24.07.07</small>
          </div>
        </div>
      </div>
      <div class="col" data-category="solo" data-url="/Project/Poketmon">
        <div class="card h-100">
          <img src="..\img\포켓몬.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-4">랜덤 포켓몬</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">JavaScript</span>
              <br>
              <span class="badge rounded-pill text-bg-info">Node.js</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">24.05.11 - 24.05.13</small>
          </div>
        </div>
      </div>
      <div class="col" data-category="team" data-url="/Project/ERP">
        <div class="card h-100">
          <img src="..\img\ERP_main.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ERP System</h5>
            <a href="http://" class="text-decoration-none">GitHub</a>
            <a href="http://" class="text-decoration-none">Notion</a>
            <div class="mt-2">
              <span class="badge rounded-pill text-bg-warning">Tailwind CSS</span>
              <span class="badge rounded-pill text-bg-warning">TypeScript</span>
              <span class="badge rounded-pill text-bg-warning">Python</span>
              <br>
              <span class="badge rounded-pill text-bg-info">Next.js</span>
              <span class="badge rounded-pill text-bg-info">Nest.js</span>
              <span class="badge rounded-pill text-bg-info">Fast API</span>
              <span class="badge rounded-pill text-bg-info">SQLite</span>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">24.07.15 - 24.08.14</small>
          </div>
        </div>
      </div>
    </div>
   

  </div>

     
      <script src="..\js\project.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?= $this->endSection() ?>