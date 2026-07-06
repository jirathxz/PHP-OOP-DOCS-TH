<!doctype html>
<html lang="th">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PHP OOP DOCS | TH - คู่มือการเขียนโปรแกรมเชิงวัตถุภาษาไทย (14 หัวข้อ)</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/5efd6bd50f.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body data-bs-theme="dark">
    <!-- Dynamic Navigation via JavaScript -->
    <div id="nav-placeholder" data-base="./"></div>

    <!-- Hero Section -->
    <section class="hero-section text-center my-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <span class="badge bg-purple-subtle-custom mb-3 px-3 py-2 rounded-pill fw-semibold">
              <i class="fa-brands fa-php me-1"></i> อิงข้อมูลจาก W3Schools PHP OOP (14 หัวข้อครบถ้วน)
            </span>
            <h1 class="display-3 fw-bolder mb-3">
              คู่มือ <span class="gradient-text">PHP OOP</span> ภาษาไทย
            </h1>
            <p class="lead text-secondary-emphasis mb-5">
              เรียนรู้การเขียนโปรแกรมเชิงวัตถุด้วยภาษา <strong>PHP 8+</strong> ตั้งแต่ระดับเริ่มต้นไปจนถึงระดับสูง อธิบายเข้าใจง่าย กระชับ พร้อมตัวอย่างโค้ดที่สามารถนำไปใช้งานได้ทันที
            </p>
          </div>
        </div>

        <!-- 14 Topics Grid (Height fitted to content) -->
        <div class="row g-4 text-start">
          <!-- 1. What is OOP -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/what-is-oop/index.html" class="text-decoration-none">
              <div class="doc-card card-encapsulation">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-blue-subtle-custom mb-0">
                    <i class="fa-solid fa-lightbulb"></i>
                  </div>
                  <span class="badge bg-blue-subtle-custom">บทที่ 1</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP What is OOP</h3>
                <p class="text-secondary small mb-3">
                  ทำความเข้าใจแนวคิด OOP คืออะไร ทำไมต้องใช้ ข้อดีและการเปรียบเทียบ Procedural vs Object-Oriented
                </p>
                <div class="d-flex align-items-center text-primary fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 2. Classes/Objects -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/classes-object/index.html" class="text-decoration-none">
              <div class="doc-card card-inheritance">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-emerald-subtle-custom mb-0">
                    <i class="fa-solid fa-cubes"></i>
                  </div>
                  <span class="badge bg-emerald-subtle-custom">บทที่ 2</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Classes / Objects</h3>
                <p class="text-secondary small mb-3">
                  เรียนรู้วิธีสร้าง Class (แม่พิมพ์) และการประกาศ Object (ตัวตนจริง) การใช้ $this และคำสั่ง new
                </p>
                <div class="d-flex align-items-center text-success fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 3. Constructor -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/constructor/index.html" class="text-decoration-none">
              <div class="doc-card card-polymorphism">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-purple-subtle-custom mb-0">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                  </div>
                  <span class="badge bg-purple-subtle-custom">บทที่ 3</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Constructor</h3>
                <p class="text-secondary small mb-3">
                  เมธอดพิเศษ __construct() ที่จะทำงานอัตโนมัติเมื่อมีการสร้าง Object ช่วยลดขั้นตอนการตั้งค่าเริ่มต้น
                </p>
                <div class="d-flex align-items-center text-info fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 4. Destructor -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/destructor/index.html" class="text-decoration-none">
              <div class="doc-card card-abstraction">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-amber-subtle-custom mb-0">
                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                  </div>
                  <span class="badge bg-amber-subtle-custom">บทที่ 4</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Destructor</h3>
                <p class="text-secondary small mb-3">
                  เมธอดพิเศษ __destruct() ทำงานอัตโนมัติก่อน Object จะถูกทำลายหรือจบการทำงานของสคริปต์
                </p>
                <div class="d-flex align-items-center text-warning fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 5. Access Modifiers -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/access-modifiers/index.html" class="text-decoration-none">
              <div class="doc-card card-encapsulation">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-pink-subtle-custom mb-0">
                    <i class="fa-solid fa-shield-halved"></i>
                  </div>
                  <span class="badge bg-pink-subtle-custom">บทที่ 5</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Access Modifiers</h3>
                <p class="text-secondary small mb-3">
                  การกำหนดสิทธิ์การเข้าถึงข้อมูลและเมธอด: Public (ทั่วไป), Protected (คลาสลูก), Private (ภายในเท่านั้น)
                </p>
                <div class="d-flex align-items-center text-danger fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 6. Inheritance -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/inheritance/index.html" class="text-decoration-none">
              <div class="doc-card card-inheritance">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-blue-subtle-custom mb-0">
                    <i class="fa-solid fa-dna"></i>
                  </div>
                  <span class="badge bg-blue-subtle-custom">บทที่ 6</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Inheritance</h3>
                <p class="text-secondary small mb-3">
                  การสืบทอดคุณสมบัติด้วยคำสั่ง extends การ Overriding เมธอด และการใช้คำสั่ง final
                </p>
                <div class="d-flex align-items-center text-primary fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 7. Constants -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/constants/index.html" class="text-decoration-none">
              <div class="doc-card card-polymorphism">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-emerald-subtle-custom mb-0">
                    <i class="fa-solid fa-lock"></i>
                  </div>
                  <span class="badge bg-emerald-subtle-custom">บทที่ 7</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Constants</h3>
                <p class="text-secondary small mb-3">
                  การกำหนดค่าคงที่ในคลาสด้วยคำสั่ง const และการเรียกใช้งานผ่านเครื่องหมาย :: และ self::
                </p>
                <div class="d-flex align-items-center text-success fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 8. Abstract Classes -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/abstract-classes/index.html" class="text-decoration-none">
              <div class="doc-card card-abstraction">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-purple-subtle-custom mb-0">
                    <i class="fa-solid fa-layer-group"></i>
                  </div>
                  <span class="badge bg-purple-subtle-custom">บทที่ 8</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Abstract Classes</h3>
                <p class="text-secondary small mb-3">
                  คลาสนามธรรมที่เป็นแม่พิมพ์บังคับให้คลาสลูกต้องนำไปเขียนเมธอดต่อ (Implement)
                </p>
                <div class="d-flex align-items-center text-info fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 9. Interfaces -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/interfaces/index.html" class="text-decoration-none">
              <div class="doc-card card-encapsulation">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-amber-subtle-custom mb-0">
                    <i class="fa-solid fa-puzzle-piece"></i>
                  </div>
                  <span class="badge bg-amber-subtle-custom">บทที่ 9</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Interfaces</h3>
                <p class="text-secondary small mb-3">
                  การสร้างข้อตกลงและมาตรฐานให้คลาสด้วยคำสั่ง interface และ implements (รองรับการทำ Multiple Inheritance)
                </p>
                <div class="d-flex align-items-center text-warning fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 10. Traits -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/traits/index.html" class="text-decoration-none">
              <div class="doc-card card-inheritance">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-pink-subtle-custom mb-0">
                    <i class="fa-solid fa-code-merge"></i>
                  </div>
                  <span class="badge bg-pink-subtle-custom">บทที่ 10</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Traits</h3>
                <p class="text-secondary small mb-3">
                  ตัวช่วยแก้ข้อจำกัด Single Inheritance ทำให้สามารถนำชุดเมธอดไปใช้ร่วมกันในหลายๆ คลาสได้อย่างอิสระ
                </p>
                <div class="d-flex align-items-center text-danger fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 11. Static Methods -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/static-methods/index.html" class="text-decoration-none">
              <div class="doc-card card-polymorphism">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-blue-subtle-custom mb-0">
                    <i class="fa-solid fa-bolt"></i>
                  </div>
                  <span class="badge bg-blue-subtle-custom">บทที่ 11</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Static Methods</h3>
                <p class="text-secondary small mb-3">
                  เมธอดสถิตที่สามารถเรียกใช้งานได้ทันทีโดยไม่ต้องสร้าง Object (new) ผ่านคำสั่ง ClassName::method()
                </p>
                <div class="d-flex align-items-center text-primary fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 12. Static Properties -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/static-properties/index.html" class="text-decoration-none">
              <div class="doc-card card-abstraction">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-emerald-subtle-custom mb-0">
                    <i class="fa-solid fa-database"></i>
                  </div>
                  <span class="badge bg-emerald-subtle-custom">บทที่ 12</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Static Properties</h3>
                <p class="text-secondary small mb-3">
                  คุณสมบัติสถิตที่ใช้ร่วมกันในทุก Instance เรียกใช้โดยไม่ต้องสร้าง Object เหมาะสำหรับค่าการตั้งค่าหรือตัวนับ
                </p>
                <div class="d-flex align-items-center text-success fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 13. Namespaces -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/namespaces/index.html" class="text-decoration-none">
              <div class="doc-card card-encapsulation">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-purple-subtle-custom mb-0">
                    <i class="fa-solid fa-folder-tree"></i>
                  </div>
                  <span class="badge bg-purple-subtle-custom">บทที่ 13</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Namespaces</h3>
                <p class="text-secondary small mb-3">
                  การจัดระเบียบคลาสเป็นหมวดหมู่ (เหมือนโฟลเดอร์) เพื่อป้องกันปัญหาชื่อคลาสซ้ำกันในโปรเจกต์ขนาดใหญ่
                </p>
                <div class="d-flex align-items-center text-info fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- 14. Iterables -->
          <div class="col-md-6 col-lg-4">
            <a href="docs/iterables/index.html" class="text-decoration-none">
              <div class="doc-card card-inheritance">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="icon-box bg-amber-subtle-custom mb-0">
                    <i class="fa-solid fa-rotate"></i>
                  </div>
                  <span class="badge bg-amber-subtle-custom">บทที่ 14</span>
                </div>
                <h3 class="h5 fw-bold text-white mb-2">PHP Iterables</h3>
                <p class="text-secondary small mb-3">
                  ประเภทข้อมูลที่สามารถนำมาวนลูปด้วย foreach() ได้ รวมถึงการสร้าง Object ที่สามารถวนลูปได้เอง
                </p>
                <div class="d-flex align-items-center text-warning fw-medium small">
                  <span>เริ่มเรียนรู้</span>
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 border-top border-secondary-subtle text-secondary small">
      <div class="container">
        <p class="mb-0">© 2026 PHP OOP DOCS TH | อิงเนื้อหาและหลักการจาก W3Schools PHP OOP</p>
      </div>
    </footer>

    <!-- Scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
