# خطة عمل: إنشاء مشروع Laravel وتهيئة NativePHP Mobile

تتضمن هذه الخطة إنشاء مشروع **Laravel** وتطوير البنية التحتية المطلوبة لـ **NativePHP Mobile**، مع نقل وتكامل ملفات الموقع الحالية (`hps_flow_up`) داخل إطار العمل لتجهيزه للعمل كتطبيق هاتف.

## User Review Required

> [!IMPORTANT]
> - **إصدار PHP الحالي:** `8.2.30` متوافق مع Laravel 11 و NativePHP Mobile.
> - **الملفات الحالية:** سيتم الحفاظ على ملفات HTML/JS/CSS الحالية وتضمينها داخل مشروع Laravel في مجلد `resources/views` و `public/` لتكون هي واجهة التطبيق.
> - **معرف التطبيق (App Bundle ID):** سيتم التحديد الافتراضي بـ `com.hpsflowup.app` (يمكنك تغييره لاحقاً من ملف `.env`).

## Proposed Changes

---

### Step 1: إنشاء مشروع Laravel ونقل الملفات الحالية

#### [NEW] [Laravel Core](file:///c:/xampp/htdocs/NewApps/hps_flow_up)
- إنشاء هيكل مشروع Laravel في المجلد الحالي `hps_flow_up`.
- تنظيم ملفات الـ HTML الحالية (`index.html`, `login.html`, `patient-dashboard.html`, `vitals.html`, إلخ) وتحويلها إلى Blade Views في `resources/views/`.
- نقل الأصول (`assets/`, `style.css`, `app.js`) إلى مجلد `public/`.

---

### Step 2: تثبيت مكتبة NativePHP Mobile وتهيئتها

#### [MODIFY] [.env](file:///c:/xampp/htdocs/NewApps/hps_flow_up/.env)
- إضافة إعدادات NativePHP:
  ```env
  NATIVEPHP_APP_ID=com.hpsflowup.app
  NATIVEPHP_APP_NAME="HPS Flow Up"
  ```

#### [NEW] [config/nativephp.php](file:///c:/xampp/htdocs/NewApps/hps_flow_up/config/nativephp.php)
- تثبيت الحزمة عبر Composer: `composer require nativephp/mobile`
- تشغيل أمر التثبيت والـ Scaffolding: `php artisan native:install`

---

### Step 3: ضبط المسارات (Routes) وتوجيه الواجهات

#### [MODIFY] [routes/web.php](file:///c:/xampp/htdocs/NewApps/hps_flow_up/routes/web.php)
- إنشاء المسارات لعرض الشاشات المختارة للتطبيق (صفحة الدخول، لوحة التحكم، العلامات الحيوية، إلخ).

---

## Verification Plan

### Automated Tests / Artisan Verification
- تشغيل `php artisan --version` للتأكد من سلامة تثبيت Laravel.
- تشغيل `php artisan native:install` والتأكد من عدم وجود أخطاء في تهيئة البيئة.
- التأكد من إمكانية تشغيل خادم التطبيق التجريبي عبر `php artisan native:serve` أو `php artisan native:jump`.

### Manual Verification
- فتح المتصفح واختبار استجابة صفحات المشروع بعد تحويلها إلى Laravel Blade.
