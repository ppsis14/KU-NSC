# KU NSC (KU Knowledge Share Community)

เว็บไซต์สำหรับอัพโหลดไฟล์สรุปเนื้อหารายวิชาที่สรุปขึ้นเอง เพื่อเป็นการแบ่งปันความรู้ให้กับนิสิต KU เพื่ใช้ในการเตรียมตัวก่อนสอบ หรือเพื่อเพิ่มเติมความรู้ในรายวิชาที่สนใจที่ทางมหาวิทยาลัยเปิดสอน นอกจากนี้สามารถแบ่งปันหนังสือเรียนที่ไม่ได้ใช้แล้ว ส่งต่อให้กับนิสิตนักศึกษาที่ต้องการ หรือจะเป็นการแจ้งข่าวสาร ประกาศที่สำคัญของทางมหาวิทยาลัยในทุกๆด้านไม่ว่าจะเป็นกีฬา การเรียน หอพัก เป็นต้น

## Purpose

* สร้างชุมชนในการแบ่งปันความรู้ให้กับนิสิต

## Authors

**กลุ่มที่ 3 Philanthropist (คนใจบุญ) **
* **นางสาวฑิฆัมพร สิมอุด 5910401033**  - github link -> [ppsis14](https://github.com/ppsis14)
    * **งานที่รับผิดชอบ :** 
        * **user**
            * ทำหน้า home ของ user โดย จะแสดงข้อมูลที่สำคัญของ user สามารถสร้าง, แก้ไข, ลบ, ซ่อน/เลิกซ่อน,
            * ทำหน้า profile ของ user โดย user สามารถแก้ไข profile ของตัวเองได้
            * มีการแจ้งเตือนให้ user ทราบเมื่อมี การสมัครเข้าระบบครั้งแรก และเมื่อมีการแก้ไข profile สำเร็จ
        * **admin**
            * ทำในหน้า Post Management ที่ให้ admin สามารถจัการดูแล post ทั้งหมดได้
            * ทำในหน้า Notification ที่ให้ admin สามารถจัการดูแล post ที่มีคนแจ้งว่าไม่ปลอดภัยให้ช่วยดูแลหน่อย
        * **others**
            * ออกแบบ UI และ CSS ของระบบ เช่น หน้า login และอื่นๆ นอกเหนือจากที่ได้มาของ Template
            * ช่วยออกแบบ Database
            * ออกแบบ Logo
            * กำหนดเงื่อนไขให้ผู้เข้าใช้ระบบจะต้องถูก authentiate ก่อนเท่านั้นถึงจะดำเนินการอย่างอื่นในระบบได้

* **นายเกียรติศักดิ์ ธีรพงษ์พิพัฒน์ 5910406060** - github link -> [robinker](https://github.com/robinker)
    * **งานที่รับผิดชอบ :**
        * **admin**
            * login ของ admin
            * หน้า dashboard ในการแสดงจำนวน user, จำนวน post และกราฟแสดงจำนวนโพสต์ในแต่ละ category
            * หน้า usermanagement แสดงตารางข้อมูลของ user และ admin
            * กำหนด policy ในการลบข้อมูลในหน้า usermanagement ให้ admin เท่านั้นที่ลบข้อมูลได้ แต่จะลบข้อมูลของตนเองไม่ได้
         * **RESTFUL API**
            * สร้าง api สำหรับการดูข้อมูล user และ post
            * ข้อมูลของ user ทั้งหมด [(127.0.0.1:8000/api/users)]
            * ข้อมูลของ user [(127.0.0.1:8000/api/users/{user_id})]
            * ข้อมูลของ post ทั้งหมด [(127.0.0.1:8000/api/posts)]
            * ข้อมูลของ post [(127.0.0.1:8000/api/posts/{post_id})]
            
* **นายปิยวัฒน์ นามทะจันทร์ 5910406256** - github link -> [Faeng](https://github.com/Faeng)
    * **งานที่รับผิดชอบ :** 
        * **user**
            * login with google เพื่อใช้งานกับ user ทั่วไป และทำการบันทึกข้อมูลที่ได้จากการ login google ของ user ลง database 
            * สามารถ login ได้เฉพาะ account ของ ku เท่านั้น
        * **admin**
            * ทำหน้าเปลี่ยนรหัสผ่านของ admin และมีการ validate ข้อมูล
            * ทำหน้าเพิ่ม admin และมีการ validate ข้อมูล
            * สร้าง gate เมื่อ user ทำการ login จะไม่สามารถเข้า route path ของ admin ได้
* **นางสาวพรรณกาญจน์ ปิ่นศรีเพ็ชรกูล 5910406302** - github link -> [pannakarn](https://github.com/pannakarn)
    * **งานที่รับผิดชอบ :** 
        * **user**
            * การจัดการ posts ของ user โดย user สามารถสร้าง, แก้ไข, ลบ, ซ่อน/เลิกซ่อน, ดู post ของตนเองและผู้อื่นได้ สามารถรีพอร์ต post ของผู้อื่นได้
            * มีการแจ้งเตือนให้ user ทราบเมื่อมี post ของตนเองถูก report
            * user สามารถอัพโหลดรูปภาพ, อัพโหลดไฟล์, ติด hashtag และเลือกประเภทของ post ได้ 
            * กำหนด policy ให้กับการทำงานของ user 
                * user สามารถดูและแก้ไข profile ของตนเองได้เท่านั้น
                * user สามารถแก้ไข, ลบ, ซ่อน/เลิกซ่อน post ของตนเองได้เท่านั้น
                * มีเพียง user เท่านั้นที่สามารถสร้าง post ได้
                * user สามารถ report post ของผู้อื่นได้หากคิดว่า post ดังกล่าวไม่เหมาะสม แต่ไม่สามารถ report post ของตนเองได้ รวมทั้งไม่สามารถยกเลิกการ report ให้กับ post ขอตัวเองได้เช่นกัน
                * user สามารถค้นหา post ที่ต้องการได้ด้วยการ search แบบธรรมดาหรือ advance search และสามารถเลือกดู post ได้ตามประเภท หรือตาม hashtag
        * **admin**
            * admin สามารถค้นหา post ที่ต้องการได้ด้วยการ search แบบธรรมดาหรือ advance search และสามารถเลือกดู post ได้ตามประเภท หรือตาม hashtag
    

## ขั้นตอนก่อนเริ่มการใช้งาน **(Getting Started)**

## Installing ติดตั้งโปรแกรม

ก่อนเริ่มต้นใช้งาน จะต้องทำการเตรียมโปรแกรมสำหรับรัน Localhost Web Service เช่น  **Laragon** หรือ **MAMP** เป็นต้น และติดตั้ง **Git** เพื่อที่จะสามารถดาวน์โหลดโปรเจคได้

- [Laragon](https://laragon.org/) or [MAMP](https://www.mamp.info/en/)
- [Git](https://git-scm.com/downloads) 
- [Visual Studio Code](https://code.visualstudio.com)

และทำการดาวน์โหลด หรือ Clone ไฟล์โปรเจคจาก github เข้าสู่คอมพิวเตอร์ก่อน โดยหากเลือกใช้ **Laragon**  ให้เลือกดาวน์โหลดหรือ clone ไปที่ folder laragon/www/ หรือหากใช้งาน **MAMP**  ให้เลือกดาวน์โหลดหรือ clone ไปที่ folder MAMP/htdocs/
>### Clone with HTTPS

พิมพ์ `git clone https://github.com/ppsis14/KU-NSC.git` ลงใน Terminal/CMD

```
git clone https://github.com/ppsis14/KU-NSC.git
```

> ### หรือ Clone with SSH
พิมพ์ `git clone git@github.com:ppsis14/KU-NSC.git` ลงใน Terminal/CMD
```
git clone git@github.com:ppsis14/KU-NSC.git
```
## ขั้นตอนการ set up laravel project
1. พิมพ์คำสั่ง cd KU-NSC
```
    cd KU-NSC
```
2. พิมพ์คำสั่ง composer install
```
    composer install
```
3. npm install (หากต้องการใช้งาน)
```
    npm install
```
4. พิมพ์คำสั่ง cp .env.example .env
```
    cp .env.example .env
```
5. พิมพ์คำสั่ง php artisan key:generate
```
    php artisan key:generate
```
6. พิมพ์คำสั่ง php artisan migrate (กรณีถ้าก่อนหน้านี้เพื่อนสร้าง ดาต้าเบสไว้กันบ้างแล้ว แต่ถ้าไม่มั่นใจ ก้อพิมคำสั่งเผื่อไส้ก้อได้ ไม่น่าจะเสียหายเท่าไหร่)
```
    php artisan migrate
```

## ขั้นตอนการใข้งาน 
โดยระบบการทำงานจะแบ่งเป็น 2 ส่วน คือ
* เข้าหน้า login เข้าไปที่ URL : 127.0.0.1:8000 เพื่อทำการเลือกว่าจะ login ในฐานะอะไร
* ส่วนของ Admin login เข้าไปที่ URL : 127.0.0.1:8000/login
* ส่วนของ User login เข้าไปที่ URL : 127.0.0.1:8000/user/login โดยต้องใช้ KU Google mail account การเข้าครั้งแรกข้อมูลจะถูกจัดเก็บข้า database หากทำการ logout แล้ว loging เข้าในครั้งถัดไปสามารถเข้า login ด้วย KU Google mail account
** เมื่อเข้าระบบได้แล้ว user สามารถสร้างโพสแชร์ความรู้ต่างๆได้ โดยการไปที่ Post แล้วเลือก + เพื่อทำการสร้างโพส


### **Login with Google Config**
* นักเรียนและอาจารย์ล็อคอินเข้าด้วย Google account (@ku.th)
> การสร้าง OAuth client สำหรับรองรับการล็อคอินด้วย google account ใน APP
* เข้าไปที่หน้า google-api console
* ไปที่ credentials - OAuth consent screen จากนั้นใส่ กำหนด appname แล้วเลือก Application Type -> Internal
* สร้าง Credentials เป็นแบบ O Auth client ID แล้วเลือก Web application
* Authorized redirect URIs และ Authorized JavaScript origins ไปที่ local host จากนั้น save
* นำ client ID ที่ได้มาใส่ในโปรเจค 

### **Database Config**
* เข้าไปที่ database ของ laragon จากนั้นกดปุ่ม Open
* กดปุ่มที่่ชื่อว่า Manage users authentication and privileges
* ทำการสร้าง database ชื่อ kunsc สำหรับใช้งาน
* กดปุ่ม add แล้วกรอก username คือ kunscUserและ password คือ kunscPassword ที่ต้องการ จากนั้นจึงกด Add object เพื่อเลือก kunsc และเพิ่มสิทธิ์ในการใช้งานต่างๆตามต้องการ (แนะนำให้เลือกทั้งหมด) และกด save เมื่อทำการเลือกเสร็จสิ้น

## Built With
> ภาษา และ โปรแกรมที่ใช้สร้าง
* laravel php framework (https://laravel.com/)
* HTML - The Programming Language used
* [PHP](http://php.net/) - The Programming Language used 
* [JAVASCRIPT](https://www.javascript.com/) The Programming Language used
* [Bootstrap](https://getbootstrap.com/) - The web framework used
* [Laragon](https://laragon.org/) - Used to be a Web Server/ Database system
* [MAMP](https://www.mamp.info/en/) - Used to be a Web Server/ Database system
