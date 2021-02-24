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
        'about_us'=> 'about WorkTime',
        'contact_us'=>'Contact us',
        'allrights'=> 'All Rights Reserved Worktime-2021'
      ],
      'Header'=> [
        'language'=> [
          'ar'=> 'Arabic',
          'en'=> 'English'
        ],
        'Menu'=> [
          'accountSetting'=> 'Account settings',
          'logOut'=> 'log out '
        ]
      ],
      'Navbar'=> [
        'Home'=> 'Home',
        'tenders'=> 'Tenders',
        'about_us'=> 'About us',
        'contact_us'=> 'Contact us',
        'en'=> 'English',
        'ar'=> 'عربي',
        'login'=> 'login',
        'signup'=> 'signup',
        'service'=>'Service',
        'blog'=> 'blogs',
      ],
      'aboutus'=> [
        'description'=>'work time هو موقع الكتروني    مصمم علئ شبكه الانترنت متخصص في اعلان ونشر كل  المناقصات بكل انواعها سواء كانت مناقصات توريدات او مناقصات انشائيه خدميه اومناقصات اخرئ..واعلانات التأهيل المسبق للمقاولين والموردين ومقدمي الخدمات وكذالك اعلان الوظائف المهنيه لكي يصل اعلاننا للمناقصه والوظائف الئ اكبر شريحه ممكنه .. تم اطلاق موقع work time عام 2021 حيث يساعد جميع الافراد والشركات والمقاولين والموردين علئ متابعه العطاءات والوظائف الجديده ...',
        'vesion'=>'Our vision',
        'vesionDes'=>'نطمح الئ ان تكون الشركه اكبر واهم موقع اعلانات للمناقصات والوظائف لكل الافراد والمؤسسات في المجتمع كامل .. ويكون اسهل واسرع موقع يتم استخدامه ويستفيد منه الجميع بشكل كبير ..  وبأن نعمل علئ وصول المناقصات الئ جميع الشركات والمقاولين والموردين المهتمين بالعطاءات الجديده .. وايضا العمل علئ وصول اعلان الوظائف الئ اكبر شريحه من ذوي الخبرات والخريجين المؤهلين للمشاركه في اماكن العمل بكل ثقه ..',
        'services'=>'Our services',
        'servicesDes'=>'تزويد الباحثين عن العطاءات والمناقصات الجديده في كل المجالات من خلال موقعنا بكل سهوله وسرعه وبميزه وصولهم تنبيه اشعارات بكل المناقصات الجديده...  وكذالك تزويد الباحث عن عمل بالقدره علئ العثور علئ الوظيفه التي يرئ نفسه مؤهل لها من خلال ادوات البحث عن جميع الوظائف المصنفه في موقعنا وبخدمه شعارات التنبيهات للوظائف والاشتراك بالفرص الجديده ..'
      ],
      'Drawer'=> [
        'Dashboard'=> 'Dashboard',
        'jobs&tendersManagement'=> 'Jobs & Tenders Management',
        'tendersManagement'=> 'Tenders Management',
        'MajorsManagement'=> 'Majors Management '
      ]
    ,
    'validation'=> [
      'startDateValidation'=> 'The tender publication date should be smaller than the end date.',
      'endDateValidation'=> 'The expiry date must be greater than the publication date.',
      'filetype'=> 'The file format should be zip or pdf',
      'emptyfieldrequired'=> 'This field must be filled.',
      'chooserequired'=> 'This field is required.',
      'exceededlimitation'=> 'You have exceeded the limit for writing',
      'undermainlimitation'=> 'It should not be less than 50 characters.',
      'emailvalidation'=> 'The email must be written correctly.',
      'wrongfieldinfo'=> 'Error entering data',
      'passwordnotmuch'=> 'Password does not match',
      'phoneno'=> 'This field must be filled in correctly',
      'imagename'=> 'The file you chose is not an image',
      'imagesize'=> 'File size should be 500 * 500',
      'imagetype'=> 'The image should be png, jpg, jpeg',
      'PasswordValidation'=> 'It should be more than 8 and contain lowercase letters, upper case letters, numbers and at least one symbol.',
      'example'=> [
        'name'=> 'Example=> Mohammed Ahmed',
        'firstname'=> 'Example=> Mohammed',
        'lastname'=> 'Example=> Ahmed',
        'email'=> 'Example=>example@gmail.com'
      ]
    ],
    'Home'=> [
      'Tenders'=> 'Tenders',
      'latestTenders'=> 'latestTenders',
      'majorsTenders'=> 'Tenders according to the departments',
      'Tenders&JobsAlerts'=> 'Tenders Jobs Alerts',
      'visti_website'=>'visit web site',

    ],
    'LogIn'=> [
      'LogInTitle'=> 'Login',
      'ForgitPwd'=> 'Forgot your password',
      'RemmberMe'=> 'Remember me',
      'Submit'=> 'Submit',
      'Email'=> 'Email',
      'Pwd'=> 'password',
      'IhaveAccount'=> 'I dont have an account'
    ],
    'Tenders'=> [
      'Title'=> 'Tenders',
      'name'=> 'Title of the Tender',
      'image'=> 'Tender image',
      'downloadpdfs'=> 'File Upload',
      'major'=> 'the major',
      'more'=> 'More information',
      'location'=> 'location',
      'company'=> 'Company / organization',
      'applyLink'=> 'Apply Link',
      'startDate'=> 'Start Date',
      'postedDate'=> 'Posted Date',
      'Deadline'=> 'Deadline',
      'description'=> 'description',
      'save'=> 'Save',
      'action'=> 'Action',
      'AddNew'=>'Add a new Tender',
      'filter'=> 'filter '
    ],
    'Majors'=> [
      'Title'=> 'Majors',
      'Tenders'=> 'Tenders Majors',
      'Jobs'=> 'Jobs Majors',
      'AddNew'=> 'Add a new Major',
      'UpdateMajor'=> 'Edit Major',
      'name'=>'Title of the Major',
      'active'=> 'Active',
      'disabled'=> 'disabled',
      'activate'=> 'Activation',
      'deactivate'=> 'Deactivate',
      'status'=> 'Status',
      'save'=> 'حفظ',
      'Update'=> 'Edit',
      'Delete'=> 'Delete',
      'action'=> 'Action'
    ],
    'apisuccessmesages'=> [
      'title'=> 'successfully'
    ],
    'apifailmessages'=> [
      'apiFail'=> 'An error occurred, check your internet connection, if the problem persists, contact the support center to find out the reason',
      'title'=> 'Sorry'
    ],
    'ContactUS'=> [
      'Tittle'=>'Contact us',
      'Name'=> 'Name',
      'Email'=> 'Email',
      'Send'=> 'Send',
      'Message'=> 'Put your message here',
      'description'=> 'If you have any questions regarding our services, please fill the form below and we will try to get back to you as soon as possible. '
    ],
    'cities'=> [
      'Abyan'=> 'Abyan',
      'Aden'=> 'Aden',
      'AlMahrah'=> 'Al Mahrah',
      'AlMahwit'=> 'Al Mahwit',
      'Sanaa'=> "Sana'a",
      'Amran'=> 'Amran',
      'Dhale'=> 'Dhale',
      'Dhamar'=> 'Dhamar',
      'Hadramaut'=> 'Hadramaut',
      'AlJawf'=> 'Al Jawf',
      'Hajjah'=> 'Hajjah',
      'Ibb'=> 'Ibb',
      'Lahij'=> 'Lahij',
      'Marib'=>"Ma'rib",
      'AlBayda'=> 'Al Bayda',
      'Raymah'=> 'Raymah',
      'Sadah'=> "Sa'dah",
      'AmanatAlAsimah'=> 'Amanat Al Asimah (Sanaa City)',
      'Shabwah'=> 'Shabwah',
      'Socotra'=> 'Socotra',
      'Taiz'=> 'Taiz'
    ],
  //]

  'Jobs'=> [
    'Title'=> 'Jobs',
    'Titles'=> 'Jobs list',
    'name'=> 'Title of the Job',
    'image'=> 'Tender image',
    'downloadpdfs'=> 'File Upload',
    'major'=> 'the major',
    'more'=> 'More information',
    'location'=> 'location',
    'company'=> 'Company / organization',
    'applyLink'=> 'Apply Link',
    'startDate'=> 'Start Date',
    'postedDate'=> 'Posted Date',
    'Deadline'=> 'Deadline',
    'description'=> 'description',
    'save'=> 'Save',
    'action'=> 'Action',
    'AddNew'=>'Add a new Job',
    'filter'=> 'filter',
    'Notify'=> 'create notify jobs',
    'cv'=> 'upload your cv here',
    'RCom'=> 'upload your recommendation here',
    'req_pdf'=>'must be pdf',
    'submit'=>'Apply now',
    'applaying'=>'To apply through our website, please enter your information',
    'others'=> 'Other Jobs',
    'applaylink'=> 'Visit website Applaying',
    'applayEmail'=> 'Sending Email Applaying',
    'toapplying'=>'To visit the Link or Email of applying '



  ],

  'Services'=> [
    'Title'=>'Services',
    'Titles'=>'Services list',
    'others'=>  'Other Services',
    'description'=>'Service Description',
  ],
  'blogs'=> [
    'Titles'=> 'Blogs',
    'Title'=> 'The blog',
    'others'=> 'Other Blogs',
    'description'=> 'Blog Description',

  ],
  
  
 // Dashbored

  /** Advertisment */
  /**Show Advertising */
  'Advertising'=>[
    'title'=>'Advertisement',
    'TitlePage'=> 'Advertisement List',
    'Title'=> 'Advertisement title',
    'image'=> 'image',
    'link'=> 'link',
    'status'=> 'status',
    'Actions'=> 'Actions',
    'Active'=> 'Active',
    'notActive'=> 'not Active',
  ],
  /**Add Advertising*/
  'AdvertisingAdd'=>[
    'TitlePage'=> 'Create New Advertising',
    'image'=> 'Advertising image',
    'choose'=> 'Choose image',
    'Title'=> 'Title',
    'link'=> 'link',
    'Submit'=> 'Create Advertising',
  ],
  /**Edite Advertising*/
  'AdvertisingEdite'=>[
    'Tilte'=> 'Edite Advertising',
    'Submit'=> 'Edite Advertising',
  ],

  /** Blogs */
  /**Show Blogs */
  'Blog'=>[
    'TitlePage'=> 'Blogs List',
    'Title'=> 'blogs title',
    'SubTiltle'=> 'sub_title',
    'image'=> 'image',
    'description'=> 'description',
    'status'=> 'status',
    'Actions'=> 'Actions',
    'Active'=> 'Active',
    'notActive'=> 'not Active',
  ],
  /**Add Blogs */
  'BlogAdd'=>[
    'TitlePage'=> 'Create New Blog',
    'image'=> 'Blog image',
    'choose'=> 'Choose image',
    'Title'=> 'Title',
    'SubTiltle'=> 'Sub_Title',
    'description'=> 'Description',
    'Submit'=> 'Create Blog'
  ],
  /**Edite Blogs */
  'BlogEdite'=>[
    'Title'=> 'Edite blog',
    'Submit'=> 'Edite blog',
  ],

  /** Jobs */
  /**Show Jobs */
  'Jobsshow'=>[
    'TitlePage'=> 'Job List',
    'Title'=> 'jobs title',
    'location'=> 'location',
    'company'=> 'company',
    'deadline'=> 'deadline',
    'status'=> 'status',
    'Actions'=> 'Actions',
    'Active'=> 'Active',
    'notActive'=> 'not Active',
  ],
  /**Add Jobs */
  'JobsAdd'=>[
    'TitlePage'=> 'Create New Job',
    'Title'=> 'Title',
    'Major'=> 'Major',
    'Location'=> 'Location',
    'OtharLocation'=> 'Othar Location',
    'Company'=> 'Company',
    'start_date'=> 'start_date',
    'image'=> 'Job image',
    'choose'=> 'Choose image',
    'deadline'=> 'deadline',
    'PostedDate'=> 'Posted Date',
    'Description'=> 'Description',
    'massege'=> 'Can the application be via the website or communication with the company?',
    'No'=> 'No',
    'Yes'=> 'Yes',
    'Both'=> 'Both',
    'link'=> 'link',
    'email'=> 'email',
    'Recommendation'=> 'Recommendation',
    'Submit'=> 'Create Job',
  ],
  /**Edite Jobs */
  'JobsEdite'=>[
    'Title'=> 'Edite job',
    'Link'=> 'Apply Link',
    'Submit'=> 'Eidte job',
  ],

  /** Majors */
  /**Show Major */
  'Major'=>[
    'Title'=> 'Major List',
    'Name'=> 'Mjaor Name',
    'type'=> 'Type',
    'status'=> 'status',
    'Actions'=> 'Actions',
    'Active'=> 'Active',
    'notActive'=> 'not Active',
  ],
  /**Add Major */
  'MajorAdd'=>[
    'Title'=> 'Add New Major',
    'Name'=> 'Mjaor Name',
    'Type'=> 'Type',
    'Tender'=> 'Tender',
    'Job'=> 'Job',
    'Submit'=> 'Create Major',
  ],
  /**Edite Major */
  'MajorEdite'=>[
    'Title'=> 'Edite Major',
    'Name'=> 'Mjaor Name',
    'Type'=> 'Type',
    'Tender'=> 'Tender',
    'Job'=> 'Job',
    'Submit'=> 'Edite Major',
  ],

  /** Services */
  /**Show Service */
  'Service'=>[
    'TitlePage'=> 'Services List',
    'Title'=> 'services title',
    'image'=> 'image',
    'description'=> 'description',
    'status'=> 'status',
    'Actions'=> 'Actions',
    'Active'=> 'Active',
    'notActive'=> 'not Active',
  ],
  /**Add Service */
  'ServiceAdd'=>[
    'TitlePage'=> 'Create New Service',
    'image'=> 'Service image',
    'choose'=> 'Choose image',
    'Title'=> 'Title',
    'description'=> 'Description',
    'Submit'=> 'Create Service',
  ],
  /** Edite Service */
  'ServiceEdite'=>[
    'Title'=> 'Edite Service',
    'Submit'=> 'Edite Service',
  ],

  /**Tender */
  /** Show Tender */
  'Tender'=>[
    'TitlePage'=> 'Tender List',
    'Title'=> 'tenders title',
    'location'=> 'location',
    'company'=> 'company',
    'deadline'=> 'deadline',
    'status'=> 'status',
    'Actions'=> 'Actions',
    'Active'=> 'Active',
    'notActive'=> 'not Active',
  ],
  /**Add Tender */
  'TenderAdd'=>[
    'TitlePage'=> 'Create New Tender',
    'Title'=> 'Title',
    'Major'=> 'Major',
    'File'=> 'Tender file',
    'chooseFile'=> 'Choose file',
    'Location'=> 'Location',
    'OtharLocation'=> 'Othar Location',
    'Company'=> 'Company',
    'Link'=> 'Apply Link',
    'start_date'=> 'start_date',
    'image'=> 'Tender image',
    'choose'=> 'Choose image',
    'deadline'=> 'deadline',
    'PostedDate'=> 'Posted Date',
    'Description'=> 'Description',
    'Submit'=> 'Create Tender',
  ],
  /**Validte Tender */
  'TenderValidate'=>[
    'requerMassage'=> '*This field must be filled .',
    'OptionMassage'=> '*This field is optional.',
    'fileMassage'=> '*The file format should be zip or pdf.',
    'locationMassage'=> '*You can choose one or more location .',
    'otharLocationMassage'=> '*When writing more than one Location, please writing a comma (,) between them.',
    'companyMassage'=> '*The text must be charecter',
    'linkMassage'=> '*Must be link or email',
    'deadlineMassage'=> '*The tender deadline date should be smaller than the start date.',
    'PosteDateMassage'=> '*The tender publication date should be smaller than the end date.',
  ],
   /**Edite Tender */
   'TenderEdite'=>[
    'Title'=> 'Edite Tender',
    'Submit'=> 'Eidte Tender',
  ],
     /** Users */
  /**Show Users */
  'Users'=>[
    'Title'=> 'Users list',
    'Name'=> 'Name',
    'UserName'=> 'UserName',
    'Email'=> 'Email',
    'status'=> 'status',
    'Actions'=> 'Actions',
    'Active'=> 'Active',
    'notActive'=> 'not Active',
  ],

   /**Add Users */
   'UserAdd'=>[
    'TitlePage'=> 'Add New User',
    'Password'=> 'Password',
    'ConfirmPassword'=> 'Confirm Password',
    'Submit'=> 'Add User',
  ],
  /**Edite Users */
  'UserEdite'=>[
    'Title'=> 'Edite User',
    'oldPassword'=> 'Old Password',
    'NewPassword'=> 'New Password',
    'Submit'=> 'Edite User',
  ],


  'Sidebar'=>[
    'Dashboard'=>'Dashboard',
    'majorMang'=> 'Major Managment',
    'majorsAll'=>'Show All Majors',
    'tenderMang'=>'Tenders Managment',
    'tendersAll'=>'Show All Tenders',
    'addTender'=> 'Add New Tender',
    'jobMang'=> 'Jobs Managment',
    'jobAll'=> 'Show All Jobs',
    'addJob'=> 'Add New Job',
    'serviceMang'=> 'Services Managment',
    'servAll'=> 'Show All Services',
    'addServ'=> 'Add New Service',
    'blogMang'=>'Blogs Managment',
    'blogAll'=> 'Show All Blogs',
    'addBlog'=> 'Add New Blog',
    'adverMang'=>'Advertisements Managment',
    'adverAll'=> 'Show All Advertisements',
'adverBlog'=> 'Add New Advertisement',
    'userMang'=>'Users Managment',
    'userAll'=> 'Show All Users',
    'adduser'=> 'Add New User',
    'logout'=> 'logout',
  ],
  'companyInfo'=>[
    'Changelogo'=> 'Change Organization Logo',
    'CompanyName'=>'Name',
    'CompanyNames'=> 'Organization Name',
    'WebsiteLink'=> 'Website Link',
    'Email'=>'Email',
    'Emails'=> 'Organization Email',
    'Phone'=>'Phone',
    'Phones'=>'Organization Phone',
    'Country'=> 'Country',
    'City'=>'City',
    'Address'=>'Address',
    'Industry'=>'Industry',
    'Type'=>'Type',
    'Types'=>'Organization Type',
    'Founded'=>'Founded',
    'size'=>'Size',
    'sizes'=>'Organization Size',
    'About'=>'About You',
    'Description'=>'Description',
    'SaveChanges'=>'Save Changes',
    'Descriptions'=>'write small discription about your company',
    'Abouts'=>'write small discription about your company',
    'compinformation'=>'Organization Information',
    'tender'=>'Post a Tender ',
    'job'=>'Post a Job ',
    'Applications'=>'View Applications',
    ''=>'',
    ''=>'',
    ''=>'',
  ],

  'userInfo'=>[
    'Changepic'=>'Change Your Picture',
    'Profile'=>'Profile',
    'Experience'=>'Experience',
    'Education'=>'Education and training',
    'Projects'=>'Projects',
    'References'=>'References',
    'Languages'=>'Languages',
    'Skills'=>'Skills',
    'FullName'=>'Full Name',
    'WebsiteLink'=>'Website Link',
    'Email'=>'Email',
    'Phone'=>'Phone',
    'Country'=>'Country',
    'City'=>'City',
    'Gender'=>'Gender',
    'Status'=>'Status',
    'About'=>'About You',
    'Abouts'=>'write small discription about you',
    'SaveChanges'=>'Save Changes',
    'From'=>'From',
    'update'=>'Update',
    'addnew'=>'Add New',
    'AddEducation'=>'Add Education',
    'To'=>'To',
    'AddRefer'=>'Add References',
    'AddLang'=>' Add Languages',
    'addSkill'=>'Add Skill',
    'AddPro'=>'Add Project',
    'Title'=>'Title',
    'Subtitle'=>'Sub-Title',
    'startdate'=>'Start Date',
    'enddate'=>'End Date',
    'description'=>'Description',
    'DescriptionExperience'=>'write small Discription about your Experience',
    'DescriptionEducation'=>'write small Discription about your Education',
    'DescriptionProjects'=>'write small Discription about your Projects',
    'DescriptionReferences'=>'write small Discription about your References',
    'Save'=>'Save',
    'Close'=>'Close',
    'AddExper'=>'Add Experience',
    'langName'=>' Languages Name',
    'langLevel'=>'Languages Level',
    'Delete'=>'Delete',
    'DeleteMass'=>'Are you sure to Delete?',
    'DeleteSure'=>'Yes, Delete!',
    'NoDelete'=>'No, Cancel',
    'ReferPhone'=>'Phone',
    'RefersPhone'=>'Phone of Reference',
    'ReferName'=>'Name ',
    'ReferEmail'=>'Email',
    'SkilName'=>'Skill Name ',
    'SkilLevel'=>'Skill Level ',
    'ReferName'=>'Name',
    'ReferEmail'=>'Email',
    'SkilName'=>'Skill Name',
    'SkilLevel'=>'Skill Level',
    'updateExperience'=>'Experience Update',
    'updateEducation'=>'Education Update',
    'updateProject'=>'Project Update',
    'updateReferences'=>'References Update',
    'updateLanguages'=>'Languages Update',
    'updateSkill'=>'Skill Update',
    'Levellangskil'=>'Level',
    'Namelangskil'=>'',
    'UserProfile'=>'User Profile',
    'Resumes'=>'Resums',
    'Letters'=>'Cover Letters',
    'temp1'=>'First Templete',
    'temp2'=>'Second Templete',
    'temp3'=>'Thired Templete',
    'backgroundColor'=>'Background Color',
    'fontColor'=>'Font Color',
    'download'=>'File Download',
    'preview'=>'Preview',
    'companyemail'=>'Organization Email',
    'companyName'=>'Organization Name',
    'companywebsite'=>'Organization Website',
    'comphone'=>'Organization Phone',
    'personname'=>'Responsible Person',
    'date'=>'Writing Date',
    'CoverLetters'=>'Your Letter',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
  ],

  'Notification'=>[
    'Notifications'=> 'Notifications',
    'Messages'=> 'Messages',
    'MessagesAll'=>'See All Messages',
    'NotificationsAll'=>'See All Notifications',
    'Search'=>'Search',
    'Notification'=> 'Notification',
    'Time'=>'Time',
    'Type'=>'Type',
    'SeeNew'=>'See New',
    'rejectJob'=>'Reject Job',
    'rejectYes'=>'Yes, Reject',
    'rejectTender'=>'Rejecte Tender',
    'rejectNo'=>'No, Cencel',
    'sureRejectJob'=>'Are you sure rejected job?',
    'sureRejectTender'=>'Are you sure you rejected tender?',
    'acceptJob'=>'Accept Job',
    'acceptTender'=>'Accept Tender',
    'accept'=>'Accept Posting',
    'sureAcceptJob'=>'The Job will post in websit !',
    'sureAcceptTender'=>'The Tender will post in websit !',
    'postTender'=>'Tender Details ',
    'postJob'=>'Job Details',
    'postJobmessage'=>'This job need some process',
    'postTendermessage'=>'This tender need some process',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',
  ],
];
