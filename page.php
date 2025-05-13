<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>دوره آموزش PHP</title>
  <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Vazirmatn', sans-serif;
      background-color: #0f172a;
      color: #fff;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 20px;
    }
    .course-header {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .video-box {
      flex: 1;
      min-width: 300px;
    }
    .video-box img {
      width: 100%;
      border-radius: 12px;
    }
    .info-box {
      flex: 1;
      min-width: 300px;
    }
    .info-box h1 {
      font-size: 24px;
      color: #fff;
    }
    .info-box p {
      line-height: 1.8;
      color: #ccc;
    }
    .discount {
      color: #f87171;
      font-weight: bold;
      margin: 10px 0;
    }
    .price {
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .price del {
      color: #888;
      margin-right: 10px;
    }
    .btn {
      background-color: #22c55e;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 8px;
      display: inline-block;
    }
    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .stat-item {
      background: #1e293b;
      padding: 15px;
      border-radius: 12px;
      text-align: center;
    }
    .stat-item span {
      display: block;
      margin-top: 8px;
      font-weight: bold;
      color: #22c55e;
    }
    .progress-bar {
      background-color: #334155;
      border-radius: 6px;
      height: 10px;
      overflow: hidden;
      margin-top: 10px;
    }
    .progress-bar-inner {
      height: 100%;
      width: 10%;
      background-color: #22c55e;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="course-header">
      <div class="video-box">
        <img src="https://sabzlearn.ir/wp-content/uploads/2024/01/php-course.png" alt="PHP Course">
      </div>
      <div class="info-box">
        <h1>آموزش جامع PHP از صفر + پروژه محور</h1>
        <p>دوره آموزش PHP یک برنامه جامع و کاربردیست و برای افرادی طراحی شده که می‌خواهند مهارت‌های خود را در زمینه برنامه‌نویسی با زبان PHP به سطح حرفه‌ای برسانند و وارد بازارکار شوند.</p>
        <div class="discount">٪20 پیشنهاد شگفت انگیز</div>
        <div class="price"><del>5,000,000</del> 4,000,000 تومان</div>
        <a class="btn" href="#">افزودن به سبد خرید</a>
      </div>
    </div>

    <div class="stats">
      <div class="stat-item">رضایت <span>5.0 ★</span></div>
      <div class="stat-item">تعداد دانشجو <span>65</span></div>
      <div class="stat-item">درصد تکمیل دوره
        <div class="progress-bar"><div class="progress-bar-inner"></div></div>
        <span>10٪</span>
      </div>
      <div class="stat-item">آخرین بروزرسانی <span>1404/02/22</span></div>
      <div class="stat-item">مدت زمان دوره <span>10 ساعت</span></div>
      <div class="stat-item">وضعیت دوره <span>در حال برگزاری</span></div>
      <div class="stat-item">پیش نیاز <span>ندارد</span></div>
      <div class="stat-item">نوع مشاهده <span>آنلاین</span></div>
    </div>
  </div>
</body>
</html>
