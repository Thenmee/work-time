<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

//[
  
    'Footer'=> [
      'about_us'=> 'من نحن',
      'contact_us'=> 'تواصل معنا',
      'allrights'=> 'جميع الحقوق محفوظة وورك تايم-2021'
    ],
    'Header'=> [
      'language'=> [
        'ar'=> 'العربية',
        'en'=> 'الانجليزية'
      ],
      'Menu'=> [
        'accountSetting'=> 'إعدادات الحساب',
        'logOut'=> 'تسجيل الخروج'
      ]
    ],
    'Navbar'=> [
      'Home'=> 'الرئيسية',
      'tenders'=> 'المناقصات',
      'about_us'=> 'من نحن',
      'contact_us'=> 'تواصل معنا',
      'en'=> 'English',
      'ar'=> 'عربي',
      'login'=> 'تسجيل الدخول',
      'signup'=> 'انشاء حساب'
    ],
    'aboutus'=> [
      'description'=>'work time هو موقع الكتروني    مصمم علئ شبكه الانترنت متخصص في اعلان ونشر كل  المناقصات بكل انواعها سواء كانت مناقصات توريدات او مناقصات انشائيه خدميه اومناقصات اخرئ..واعلانات التأهيل المسبق للمقاولين والموردين ومقدمي الخدمات وكذالك اعلان الوظائف المهنيه لكي يصل اعلاننا للمناقصه والوظائف الئ اكبر شريحه ممكنه .. تم اطلاق موقع work time عام 2021 حيث يساعد جميع الافراد والشركات والمقاولين والموردين علئ متابعه العطاءات والوظائف الجديده ...',
      'vesion'=>'رؤيتنا',
      'vesionDes'=>'نطمح الئ ان تكون الشركه اكبر واهم موقع اعلانات للمناقصات والوظائف لكل الافراد والمؤسسات في المجتمع كامل .. ويكون اسهل واسرع موقع يتم استخدامه ويستفيد منه الجميع بشكل كبير ..  وبأن نعمل علئ وصول المناقصات الئ جميع الشركات والمقاولين والموردين المهتمين بالعطاءات الجديده .. وايضا العمل علئ وصول اعلان الوظائف الئ اكبر شريحه من ذوي الخبرات والخريجين المؤهلين للمشاركه في اماكن العمل بكل ثقه ..',
      'services'=>'خدماتنا',
      'servicesDes'=>'تزويد الباحثين عن العطاءات والمناقصات الجديده في كل المجالات من خلال موقعنا بكل سهوله وسرعه وبميزه وصولهم تنبيه اشعارات بكل المناقصات الجديده...  وكذالك تزويد الباحث عن عمل بالقدره علئ العثور علئ الوظيفه التي يرئ نفسه مؤهل لها من خلال ادوات البحث عن جميع الوظائف المصنفه في موقعنا وبخدمه شعارات التنبيهات للوظائف والاشتراك بالفرص الجديده ..'
    ],
    'Drawer'=> [
      'Dashboard'=> 'الرئيسية',
      'jobs&tendersManagement'=> ' إدارة الوظائف و المناقصات ',
      'tendersManagement'=> 'إدارة المناقصات',
      'MajorsManagement'=> 'إدارة الاقسام'
    ]
  ,
  'validation'=> [
    'startDateValidation'=> 'يجب ان يكون تاريخ نشر المناقصه اصغر من تاريخ الانتهاء',
    'endDateValidation'=> 'يجب ان يكون تاريخ الانتهاء  اكبر من تاريخ النشر ',
    'filetype'=> 'يجب ان تكون صيغة الملف zip او pdf',
    'emptyfieldrequired'=> 'يجب ملىء هذا الحقل',
    'chooserequired'=> 'هذا الحقل ضروري',
    'exceededlimitation'=> 'لقد تجاوزت الحد المسموح للكتابه',
    'undermainlimitation'=> 'يجب ان لا يكون اقل من 50 حرف ',
    'emailvalidation'=> 'يجب كتابة الايميل بشكل صحيح',
    'wrongfieldinfo'=> 'خطاء في ادخال البيانات',
    'passwordnotmuch'=> 'كلمة المرور لا تتطابق',
    'phoneno'=> 'يجب ملئ هذا الحقل بالبيانات وبشكل صحيح',
    'imagename'=> 'الملف الذي اخترته ليس صوره',
    'imagesize'=> 'حجم الملف يجب ان يكون 500*500',
    'imagetype'=> 'الصوره يجب ان تكون من نوع png ,jpg,jpeg',
    'PasswordValidation'=> ' يجب ان تكون اكثر من 8 وتحتوي على احرف صغيره،احرف كبيره وارقام ورمز واحد على الاقل ',
    'example'=> [
      'name'=> 'مثال=> محمد احمد',
      'firstname'=> 'مثال=> محمد',
      'lastname'=> 'مثال=>احمد',
      'email'=> 'مثال=>example@gmail.com'
    ]
  ],
  'Home'=> [
    'Tenders'=> 'المناقصات',
    'latestTenders'=> 'اخر المناقصات',
    'majorsTenders'=> 'المناقصات على حسب الاقسام',
    'Tenders&JobsAlerts'=> 'إشعارات '
  ],
  'LogIn'=> [
    'LogInTitle'=> 'تسجيل الدخول ',
    'ForgitPwd'=> 'نسيت كلمة المرور',
    'RemmberMe'=> 'تذكرني',
    'Submit'=> 'دخول',
    'Email'=> 'البريد الالكتروني',
    'Pwd'=> 'كلمة المرور',
    'IhaveAccount'=> 'ليس لدي حساب'
  ],
  'Tenders'=> [
    'Title'=> 'المناقصات',
    'name'=> 'عنوان المناقصه',
    'image'=> 'صورة المناقصه',
    'downloadpdfs'=> 'تحميل الملفات',
    'major'=> 'القسم',
    'more'=> 'مزيد من المعلومات',
    'location'=> 'المنطقة',
    'company'=> 'الشركة/المنظمة',
    'applyLink'=> 'رابط التقديم',
    'startDate'=> 'تاريخ البدء',
    'postedDate'=> 'تاريخ النشر',
    'Deadline'=> 'تاريخ الانتهاء',
    'description'=> 'وصف المناقصة',
    'save'=> 'حفظ',
    'action'=> 'الحدث',
    'AddNew'=> 'إضافة مناقصة جديد',
    'filter'=> 'فرز حسب'
  ],
  'Majors'=> [
    'Title'=> 'الأقسام',
    'Tenders'=> 'أقسام المناقصات',
    'Jobs'=> 'أقسام الوظايف',
    'AddNew'=> 'إضافة قسم جديد',
    'UpdateMajor'=> 'تعديل القسم',
    'name'=> 'عنوان القسم',
    'active'=> 'مفعل',
    'disabled'=> 'غير مفعل',
    'activate'=> 'تفعيل',
    'deactivate'=> 'إلغاء التفعيل',
    'status'=> 'الحالة',
    'save'=> 'حفظ',
    'Update'=> 'تعديل',
    'Delete'=> 'حذف',
    'action'=> 'الحدث'
  ],
  'apisuccessmesages'=> [
    'title'=> 'تم بنجاح'
  ],
  'apifailmessages'=> [
    'apiFail'=> 'حدث خطاء ما تحقق من اتصالك بالانترنت ،ان استمرت المشكله تواصل مع مركز الدعم لمعرفة السبب',
    'title'=> 'عذرا'
  ],
  'ContactUS'=> [
    'Tittle'=> ' تواصل معنا',
    'Name'=> 'إسمك',
    'Email'=> 'بريدك الالكتروني',
    'Send'=> 'أرسل',
    'Message'=> 'ضع رسالتك هنا',
    'description'=> 'إذا كانت لديك أي أسئلة بخصوص خدماتنا ، يرجى ملء النموذج أدناه وسنحاول الرد عليك في أقرب وقت ممكن. '
  ],
  'cities'=> [
    'Abyan'=> 'أبين',
    'Aden'=> 'عدن',
    'AlMahrah'=> 'المهرة',
    'AlMahwit'=> 'المحويت',
    'Sanaa'=> 'صنعا',
    'Amran'=> 'عمران',
    'Dhale'=> 'الضالع',
    'Dhamar'=> 'ذمار',
    'Hadramaut'=> 'حضرموت',
    'AlJawf'=> 'الجوف',
    'Hajjah'=> 'حجة',
    'Ibb'=> 'إب',
    'Lahij'=> 'لحج',
    'Marib'=> 'مأرب',
    'AlBayda'=> 'البيضاء',
    'Raymah'=> 'ريمة',
    'Sadah'=> 'صعدة',
    'AmanatAlAsimah'=> 'أمانة العاصمة',
    'Shabwah'=> 'شبوة',
    'Socotra'=> 'سقطرى',
    'Taiz'=> 'تعز'
  ],

  'Jobs'=> [
    'Title'=> ' الوظائف',
    'Titles'=> ' قائمة الوظائف',
    'name'=> 'عنوان الوظيفة',
    'image'=> 'صورة الوظيفة',
    'downloadpdfs'=> 'تحميل الملفات',
    'major'=> 'القسم',
    'more'=> 'مزيد من المعلومات',
    'location'=> 'المنطقة',
    'company'=> 'الشركة/المنظمة',
    'applyLink'=> 'رابط التقديم',
    'startDate'=> 'تاريخ البدء',
    'postedDate'=> 'تاريخ النشر',
    'Deadline'=> 'تاريخ الانتهاء',
    'description'=> 'وصف الوظيفة',
    'save'=> 'حفظ',
    'action'=> 'الحدث',
    'AddNew'=> 'إضافة وظيفة جديدة',
    'filter'=> 'فرز حسب',
    'Notify'=> 'انشاء تنبية وظيفي',
    'cv' => 'ادخال سيرتك الذاتية هنا ',
    'RCom' => 'التوصيات التي حصلت عليها',
    'req_pdf'=>'يجب ان يكون pdf',
    'submit'=>'التقديم الان ',
    'applaying'=>' للتقديم عبر موقعنا يرجى ادخال بياناتك',
  ],

];
//]