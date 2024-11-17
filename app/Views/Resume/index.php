<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="..\css\resume.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <div class="container d-flex flex-column align-items-start mt-5" style="height: auto; width: 750px;">
    <div class="Resumecon d-flex border-bottom border-secondary border-opacity-25 pb-4 w-100 justify-content-center align-items-center">
      <img src="..\img\증명사진.jpg" alt="증명사진" class="img-fluid mb-1" style="width: 200px; height: auto; border-radius: 30%;">
      <div class="produce_con ms-5" style="width: 20vw;">
        <p class="fw-bold text-warning">Contact</p>
          <div class="container d-flex">
            <p class="fw-bold">Name </p>
            <p class="ms-2">이연승</p>
          </div>
          <div class="container d-flex">
            <p class="fw-bold">Email </p>
            <p class="ms-2">leeys951006@gmail.com</p>
          </div>
          <div class="container d-flex">
            <p class="fw-bold">Phone </p>
            <p class="ms-2">010-5546-0640</p>
          </div>
        <p class="fw-bold text-warning">Channel</p>
          <div class="container d-flex">
            <p class="fw-bold">Github </p>
            <a href="https://github.com/leeys951006" target="_blank" class="text-decoration-none text-dark ms-2">
            https://github.com/leeys951006
            </a>
          </div>
          <div class="container d-flex">
            <p class="fw-bold">Notion </p>
            <a href="https://nifty-mountain-1e6.notion.site/6082bd6c7d394c01a33ca3c9395cd3b1?v=7bdd17d9378f42e2bffce1b200cfc53a&pvs=4" 
           target="_blank" 
           class="text-decoration-none text-dark ms-2 text-truncate">
            https://nifty-mountain-1e6.notion.site/6082bd6c7d394c01a33ca3c9395cd3b1?v=7bdd17d9378f42e2bffce1b200cfc53a&pvs=4
            </a>
          </div>
      </div>
    </div>

    <!-- introduce -->
    <div class="introduce_con w-100">
        <h1 class="mt-5 text-warning">Introduce</h1>
        <div class="border-bottom border-secondary border-opacity-50 pb-4 mt-3" style="border-top: 4px solid black;">
          <p class="mt-5 ">새로운 도전에 두려워하지않는 개발자 이연승입니다.</p>
          <p >저는 비개발 분야에서 경력을 시작했지만, 개인 사업을 하며 개발에 대한 흥미를 갖게 되었습니다.</p>
          <p >7개월 동안 KDT 학원에서 학습하였고, 팀 프로젝트와 개인프로젝트를 통해 다양한 언어를 경험 및 학습하였습니다.</p>
          
          <p >1차 팀 프로젝트에서는 git과 github의 사용법을 중점으로 작업하였고 2차 팀 프로젝트는 아키텍처 설계와 작업 우선순위를 체계화 하여 작업에 임했습니다.</p>
          
          <p >저는 git과 github를 사용하여 협업 또는 작업의 효율을 증가시켰고 Notion을 통해 지식과 문제 해결 방법을 정리하여 작업을 진행하였습니다.</p>
         
          <p >회사와 개발 트렌트를 위해 '새로운 언어에 대한 두려움'을 없애고자 여러 언어를 경험하고 습득하는 중이며, 앞으로도 끊임없이 학습하며 도전하는 개발자로 성장해 나가려고 합니다.</p>
        </div>
    </div>

    <!-- Education -->
    <div class="Education_con w-100">
        <h1 class="mt-5 text-warning">Education</h1>
        <div class="border-bottom border-secondary border-opacity-50 pb-4 mt-3" style="border-top: 4px solid black;">
          <div>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <p class="mb-0 mt-3 text-secondary">2011.03 - 2014.02 | 졸업</p>
                    <h3 class="fw-bold">대전 대신 고등학교</h3>
                </div>
                <p class="mb-0 mt-4"></p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <p class="mb-0 mt-3 text-secondary">2014.03 - 2016.02 | 졸업</p>
                    <h3 class="fw-bold">대덕대학교</h3>
                </div>
                <p class="mb-0 mt-4">세무회계과</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <p class="mb-0 mt-3 text-secondary">2020.03 - 2020.07 | 편입</p>
                    <h3 class="fw-bold">국립 공주대학교</h3>
                </div>
                <p class="mb-0 mt-4">응용수학과</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <p class="mb-0 mt-3 text-secondary">2024.01 - 진행중 | 졸업예정</p>
                    <h3 class="fw-bold">학점은행제</h3>
                </div>
                <p class="mb-0 mt-4">컴퓨터공학과</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <p class="mb-0 mt-3 text-secondary">2024.03 - 2024.10</p>
                    <h3 class="fw-bold">그린컴퓨터아트학원</h3>
                </div>
                <p class="mb-0 mt-4">KDT 지역인재 양성을 위한 laaS기반 웹 서비스 개발자 과정 2기</p>
            </div>
          </div>
        </div>
    </div>

    <div class="Career_con w-100">
        <h1 class="mt-5 text-warning">Career</h1>
        <div class="border-bottom border-secondary border-opacity-50 pb-4 mt-3" style="border-top: 4px solid black;">
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4">(주)고려인텍</h3>
                <p class="mb-0 mt-4">2022.09 - 2024.02</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4">HLB 헬스케어</h3>
                <p class="mb-0 mt-4">2022.01 - 2022.04</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4">지오매틱스</h3>
                <p class="mb-0 mt-4">2021.07 - 2021.12</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4">킵스바이오</h3>
                <p class="mb-0 mt-4">2020.03 - 2021.04</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4">대전오월드</h3>
                <p class="mb-0 mt-4">2019.09 - 2020.02</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4">삼성물산대전사무소</h3>
                <p class="mb-0 mt-4">2018.10 - 2019.02</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between">  
                <h3 class="fw-bold mt-4">한국정보통신진흥협회</h3>
                <p class="mb-0 mt-4">2018.03 - 2018.08</p>
            </div>
          </div>
        </div>
    </div>

    <!-- Tools -->
    <div class="Tools_con w-100">
        <h1 class="mt-5 text-warning">Tools</h1>
        <div class="border-bottom border-secondary border-opacity-50 pb-4 mt-3" style="border-top: 4px solid black;">
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4 ms-5">Language</h3>
                <div class="d-flex flex-column mt-3 w-25">
                  <p class="mb-0 mx-5">HTML</p>
                  <p class="mb-0 mx-5">CSS</p>
                  <p class="mb-0 mx-5">JavaScript</p>
                  <p class="mb-0 mx-5">TypeScript</p>
                  <p class="mb-0 mx-5">PHP</p>
                </div>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4 ms-5">Frontend</h3>
                <div class="d-flex flex-column mt-3 w-25">
                  <p class="mb-0 mx-5">React</p>
                  <p class="mb-0 mx-5">Next.js</p>
                  <p class="mb-0 mx-5">Codeigniter</p>
                </div>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4 ms-5">Backend</h3>
                <div class="d-flex flex-column mt-3 w-25">
                  <p class="mb-0 mx-5">Nest.js</p>
                  <p class="mb-0 mx-5">Codeigniter</p>
                </div>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4 ms-5">DB</h3>
                <div class="d-flex flex-column mt-3 w-25">
                  <p class="mb-0 mx-5">MySQL</p>
                  <p class="mb-0 mx-5">SQLite</p>
                </div>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2">  
                <h3 class="fw-bold mt-4 ms-5">Communication</h3>
                <div class="d-flex flex-column mt-3 w-25">
                  <p class="mb-0 mx-5">GitHub</p>
                  <p class="mb-0 mx-5">Notion</p>
                  <p class="mb-0 mx-5">Slack</p>
                </div>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between pb-2">  
                <h3 class="fw-bold mt-4 ms-5">Design</h3>
                <div class="d-flex flex-column mt-3 w-25">
                  <p class="mb-0 mx-5">Figma</p>
                </div>
            </div>
          </div>
         
        </div>
    </div>
   

  </div>

     
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?= $this->endSection() ?>