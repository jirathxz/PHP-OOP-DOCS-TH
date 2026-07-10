<div align="center">

# 🐘 PHP OOP DOCS | TH
### คู่มือการเขียนโปรแกรมเชิงวัตถุ (Object-Oriented Programming) ด้วยภาษา PHP ฉบับภาษาไทย

*อิงเนื้อหาและหลักสูตรจาก [W3Schools PHP OOP](https://www.w3schools.com/php/php_oop_what_is.asp) ครบถ้วนทั้ง 14 หัวข้อ อธิบายเข้าใจง่าย กระชับ พร้อมตัวอย่างโค้ดสไตล์ Modern UI ที่นำไปใช้ได้ทันที*

[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![W3Schools Reference](https://img.shields.io/badge/Reference-W3Schools-04AA6D?style=for-the-badge&logo=w3schools&logoColor=white)](https://www.w3schools.com/php/php_oop_what_is.asp)
[![Bootstrap 5](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![Read on GitHub Pages](https://img.shields.io/badge/🚀_อ่านออนไลน์-GitHub_Pages-6366f1?style=for-the-badge&logo=github)](https://jirathxz.github.io/OOP-DOCS-TH/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)

</div>

---

## 🌐 เข้าสู่เว็บไซต์คู่มือออนไลน์ (Online Documentation)

คุณสามารถเข้าอ่านคู่มือและตัวอย่างโค้ดทั้งหมดผ่านหน้าเว็บไซต์ออนไลน์ได้ทันที โดยไม่ต้องติดตั้งเซิร์ฟเวอร์ในเครื่อง:

> [!IMPORTANT]
> **คลิกเพื่อเข้าสู่หน้าหลักระบบนำทาง 14 บทเรียน:**  
> 👉 **[https://jirathxz.github.io/OOP-DOCS-TH/](https://jirathxz.github.io/OOP-DOCS-TH/)** *(หรือ [https://jirathxz.github.io/PHP-OOP-DOCS-TH/](https://jirathxz.github.io/PHP-OOP-DOCS-TH/))*

---

## ✨ จุดเด่นและคุณสมบัติหลัก (Key Features)

- 📖 **ครบถ้วน 14 หัวข้อหลักตามมาตรฐาน W3Schools:** ครอบคลุมตั้งแต่พื้นฐาน OOP, 4 เสาหลัก ไปจนถึงเนื้อหาระดับสูงเช่น Namespaces, Iterables และ Traits
- 💻 **Modern PHP 8+ Syntax:** โค้ดตัวอย่างเขียนด้วยไวยากรณ์ยุคใหม่ อ่านง่าย เป็นระเบียบ พร้อมคำอธิบายภาษาไทยแบบบรรทัดต่อบรรทัด
- 🎨 **Glassmorphism Dark Mode UI:** อินเทอร์เฟซออกแบบสไตล์ Modern Dark Theme สบายตา จัดการความสูงการ์ดและจัดวางเนื้อหาให้พอดีกับหน้าจอ (Content-Fitted Height)
- ⚡ **Dynamic Navigation via Fetch API:** ระบบแถบนำทางส่วนกลาง (`nav.html`) โหลดอัตโนมัติด้วย JavaScript ทำให้บำรุงรักษาและจัดการเมนูได้ง่าย ไม่เขียนโค้ดซ้ำซ้อน
- 📋 **Interactive Copy Code:** ทุกกล่องตัวอย่างโค้ดมาพร้อมปุ่ม **Copy** คัดลอกโค้ดไปทดลองรันในโปรเจกต์ของคุณได้ทันทีในคลิกเดียว

---

## 🏛️ 4 เสาหลักของแนวคิดเชิงวัตถุ (The 4 Pillars of OOP)

| เสาหลัก (Pillar) | ชื่อภาษาไทย | คำอธิบายย่อ |
| :--- | :--- | :--- |
| 🔒 **Encapsulation** | การห่อหุ้มข้อมูล | รวบรวมข้อมูลและพฤติกรรมไว้ใน Object พร้อมใช้ Access Modifiers (`public`, `protected`, `private`) ป้องกันการแก้ไขข้อมูลจากภายนอกโดยไม่ได้รับอนุญาต |
| 🌳 **Inheritance** | การสืบทอดคุณสมบัติ | คลาสลูกสามารถรับเอาคุณสมบัติและเมธอดจากคลาสแม่ (`extends`) เพื่อนำไปขยายการทำงานต่อได้ทันที ช่วยลดการเขียนโค้ดซ้ำซ้อน (DRY) |
| 🎭 **Polymorphism** | พ้องรูป / การแปลงกาย | ความสามารถของ Object ต่างคลาสที่สามารถตอบสนองต่อชื่อเมธอดเดียวกันในรูปแบบการทำงานของตัวเอง ผ่าน Overriding หรือ Interface |
| 📦 **Abstraction** | นามธรรม / ซ่อนความซับซ้อน | ซ่อนรายละเอียดการทำงานที่ซับซ้อนไว้เบื้องหลัง แสดงให้เห็นเฉพาะโครงสร้างหลักที่จำเป็นผ่าน `abstract class` หรือ `interface` |

---

## 📚 สารบัญบทเรียนทั้ง 14 หัวข้อ (Table of Contents)

### 🌱 ระดับพื้นฐาน (Basic Level)
| บทที่ | หัวข้อเรื่อง (Topic) | คำอธิบายย่อ | อ่านออนไลน์ |
| :---: | :--- | :--- | :---: |
| **1** | [PHP What is OOP](./docs/what-is-oop/index.html) | ทำความเข้าใจแนวคิด OOP คืออะไร ทำไมต้องใช้ และเปรียบเทียบกับ Procedural | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/what-is-oop/) |
| **2** | [PHP Classes / Objects](./docs/classes-object/index.html) | การสร้าง Class (แม่พิมพ์), การประกาศ Object (`new`) และการใช้ตัวแปร `$this` | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/classes-object/) |
| **3** | [PHP Constructor](./docs/constructor/index.html) | เมธอดพิเศษ `__construct()` ที่ทำงานทันทีอัตโนมัติเมื่อมีการสร้าง Object ใหม่ | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/constructor/) |
| **4** | [PHP Destructor](./docs/destructor/index.html) | เมธอดพิเศษ `__destruct()` ที่ทำงานอัตโนมัติเมื่อสิ้นสุดการทำงานของสคริปต์ | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/destructor/) |
| **5** | [PHP Access Modifiers](./docs/access-modifiers/index.html) | การกำหนดระดับสิทธิ์เข้าถึงข้อมูลและเมธอด: `public`, `protected` และ `private` | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/access-modifiers/) |

### ⚙️ ระดับกลาง (Intermediate Level)
| บทที่ | หัวข้อเรื่อง (Topic) | คำอธิบายย่อ | อ่านออนไลน์ |
| :---: | :--- | :--- | :---: |
| **6** | [PHP Inheritance](./docs/inheritance/index.html) | การสืบทอดคุณสมบัติคลาสด้วย `extends`, การ Overriding เมธอด และคำสั่ง `final` | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/inheritance/) |
| **7** | [PHP Constants](./docs/constants/index.html) | การประกาศค่าคงที่ในคลาสด้วย `const` และวิธีการเรียกใช้ผ่าน `self::` และ `::` | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/constants/) |
| **8** | [PHP Abstract Classes](./docs/abstract-classes/index.html) | คลาสนามธรรมที่เป็นแม่พิมพ์หลัก บังคับให้คลาสลูกต้องนำเมธอดไปเขียนเนื้อหาต่อ | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/abstract-classes/) |
| **9** | [PHP Interfaces](./docs/interfaces/index.html) | การกำหนดข้อตกลงและมาตรฐานให้คลาสด้วย `interface` และ `implements` | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/interfaces/) |
| **10** | [PHP Traits](./docs/traits/index.html) | ตัวช่วยแก้ข้อจำกัด Single Inheritance ของ PHP ทำให้แชร์เมธอดร่วมกันในหลายคลาสได้ | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/traits/) |

### 🚀 ระดับสูง (Advanced Level)
| บทที่ | หัวข้อเรื่อง (Topic) | คำอธิบายย่อ | อ่านออนไลน์ |
| :---: | :--- | :--- | :---: |
| **11** | [PHP Static Methods](./docs/static-methods/index.html) | เมธอดสถิตที่เรียกใช้ได้ทันทีจากชื่อคลาสผ่านตัวดำเนินการ `::` โดยไม่ต้องสร้าง Object | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/static-methods/) |
| **12** | [PHP Static Properties](./docs/static-properties/index.html) | คุณสมบัติสถิตที่เป็นค่ากลาง ใช้ร่วมกันในทุก Instance ของคลาส และการเข้าถึงด้วย `self::` | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/static-properties/) |
| **13** | [PHP Namespaces](./docs/namespaces/index.html) | การจัดหมวดหมู่คลาส เปรียบเสมือนโฟลเดอร์ ป้องกันปัญหาชื่อคลาสหรือฟังก์ชันซ้ำกัน | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/namespaces/) |
| **14** | [PHP Iterables](./docs/iterables/index.html) | ประเภทข้อมูล (`iterable`) ที่สามารถนำมาวนลูปด้วยคำสั่ง `foreach()` ได้ | [🔗 คลิก](https://jirathxz.github.io/OOP-DOCS-TH/docs/iterables/) |

---

## 🛠️ โครงสร้างไฟล์ภายในโปรเจกต์ (Project Structure)

```text
OOP-DOCS-TH/
├── docs/                   # โฟลเดอร์รวมเอกสารบทเรียนทั้ง 14 หัวข้อ
│   ├── what-is-oop/        # บทที่ 1: What is OOP
│   ├── classes-object/     # บทที่ 2: Classes / Objects
│   ├── constructor/        # บทที่ 3: Constructor
│   ├── destructor/         # บทที่ 4: Destructor
│   ├── access-modifiers/   # บทที่ 5: Access Modifiers
│   ├── inheritance/        # บทที่ 6: Inheritance
│   ├── constants/          # บทที่ 7: Constants
│   ├── abstract-classes/   # บทที่ 8: Abstract Classes
│   ├── interfaces/         # บทที่ 9: Interfaces
│   ├── traits/             # บทที่ 10: Traits
│   ├── static-methods/     # บทที่ 11: Static Methods
│   ├── static-properties/  # บทที่ 12: Static Properties
│   ├── namespaces/         # บทที่ 13: Namespaces
│   └── iterables/          # บทที่ 14: Iterables
├── index.html              # หน้าหลัก (Homepage) สรุปภาพรวมและสารบัญ 14 บทเรียน
├── nav.html                # แถบนำทางส่วนกลาง (Loaded dynamically via script.js)
├── style.css               # สไตล์ชีทหลัก (Modern Glassmorphism Dark Mode)
├── script.js               # สคริปต์โหลดเมนูนำทางและระบบ Copy Code
└── README.md               # เอกสารรายละเอียดโปรเจกต์นี้
```

---

## 💻 การติดตั้งและการรันบนเครื่องคอมพิวเตอร์ (Local Development)

หากคุณต้องการรันโปรเจกต์นี้เพื่อศึกษาหรือพัฒนาต่อบนเครื่องของคุณ:

1. **โคลนโปรเจกต์จาก GitHub:**
   ```bash
   git clone https://github.com/jirathxz/OOP-DOCS-TH.git
   ```
   *(หรือใช้ที่อยู่ใหม่: `https://github.com/jirathxz/PHP-OOP-DOCS-TH.git`)*

2. **เข้าใช้งานผ่านเว็บเบราว์เซอร์:**
   เนื่องจากโปรเจกต์นี้ได้รับการพัฒนาให้เป็น **Static Web Application** สมบูรณ์แบบ คุณสามารถดับเบิลคลิกเปิดไฟล์ `index.html` บนเบราว์เซอร์ได้ทันที หรือรันผ่าน Local Web Server (เช่น XAMPP, Laragon หรือ Live Server ของ VS Code):
   ```text
   http://localhost/OOP-DOCS-TH/index.html
   ```

---

<p align="center">
  <b>© 2026 PHP OOP DOCS TH</b> | จัดทำเพื่อการศึกษาและแบ่งปันความรู้แด่ชุมชนนักพัฒนาชาวไทย 🇹🇭<br>
  <small>Open-source under the MIT License.</small>
</p>