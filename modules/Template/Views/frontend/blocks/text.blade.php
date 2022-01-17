<div class="container">
    <div class="bravo-text {{$class ?? ''}}">
        {!! clean($content ?? '') !!}
    </div>
</div>


<style>




    :root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";--font-family-monospace:SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;}
    *,*::before,*::after{box-sizing:border-box;}
    html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent;}
    figure,header{display:block;}
    body{margin:0;font-family:-apple-system,BlinkMacSystemFont,segoe ui,Roboto,helvetica neue,Arial,noto sans,sans-serif,apple color emoji,segoe ui emoji,segoe ui symbol,noto color emoji;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff;}
    h1,h2{margin-top:0;margin-bottom:.5rem;}
    p{margin-top:0;margin-bottom:1rem;}
    ul{margin-top:0;margin-bottom:1rem;}
    a{color:#007bff;text-decoration:none;background-color:transparent;}
    a:hover{color:#0056b3;text-decoration:underline;}
    figure{margin:0 0 1rem;}
    img{vertical-align:middle;border-style:none;}

    h1,h2{margin-bottom:.5rem;font-weight:500;line-height:1.2;}
    h1{font-size:2.5rem;}
    h2{font-size:2rem;}
    .list-inline{padding-left:0;list-style:none;}
    .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
    @media (min-width:576px){
        .container{max-width:540px;}
    }
    @media (min-width:768px){
        .container{max-width:720px;}
    }
    @media (min-width:992px){
        .container{max-width:960px;}
    }
    @media (min-width:1200px){
        .container{max-width:1140px;}
    }
    .row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
    .col-md-4,.col-md-12,.col-lg-6{position:relative;width:100%;padding-right:15px;padding-left:15px;}
    @media (min-width:768px){
        .col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
        .col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
    }
    @media (min-width:992px){
        .col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
    }
    .form-control{display:block;width:100%;height:calc(1.5em + 0.75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
    @media (prefers-reduced-motion:reduce){
        .form-control{transition:none;}
    }
    .form-control::-ms-expand{background-color:transparent;border:0;}
    .form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
    .form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
    .form-control::-moz-placeholder{color:#6c757d;opacity:1;}
    .form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
    .form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
    .form-control::placeholder{color:#6c757d;opacity:1;}
    .form-control:disabled{background-color:#e9ecef;opacity:1;}
    .btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
    @media (prefers-reduced-motion:reduce){
        .btn{transition:none;}
    }
    .btn:hover{color:#212529;text-decoration:none;}
    .btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
    .btn:disabled{opacity:.65;}
    .btn-primary{color:#fff;background-color:#007bff;border-color:#007bff;}
    .btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc;}
    .btn-primary:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5);}
    .btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff;}
    .fade{transition:opacity .15s linear;}
    @media (prefers-reduced-motion:reduce){
        .fade{transition:none;}
    }
    .dropdown{position:relative;}
    .dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;}
    .input-group{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:stretch;align-items:stretch;width:100%;}
    .input-group>.form-control{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;margin-bottom:0;}
    .input-group>.form-control:focus{z-index:3;}
    .input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0;}
    .nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none;}
    .nav-link{display:block;padding:.5rem 1rem;}
    .nav-link:hover,.nav-link:focus{text-decoration:none;}
    .tab-content>.tab-pane{display:none;}
    .tab-content>.active{display:block;}
    .navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap;}
    .navbar-brand:hover,.navbar-brand:focus{text-decoration:none;}
    .card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem;}
    .card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem;}
    .border-bottom{border-bottom:1px solid #dee2e6!important;}
    .border-0{border:0!important;}
    .d-inline-block{display:inline-block!important;}
    .d-block{display:block!important;}
    .d-flex{display:-ms-flexbox!important;display:flex!important;}
    @media (min-width:768px){
        .d-md-block{display:block!important;}
    }
    .flex-column{-ms-flex-direction:column!important;flex-direction:column!important;}
    .flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important;}
    .justify-content-center{-ms-flex-pack:center!important;justify-content:center!important;}
    .justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important;}
    .align-items-end{-ms-flex-align:end!important;align-items:flex-end!important;}
    .align-items-center{-ms-flex-align:center!important;align-items:center!important;}
    @media (min-width:768px){
        .flex-md-row{-ms-flex-direction:row!important;flex-direction:row!important;}
    }
    @media (min-width:992px){
        .align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important;}
    }
    @media (min-width:1200px){
        .justify-content-xl-center{-ms-flex-pack:center!important;justify-content:center!important;}
    }
    .position-relative{position:relative!important;}
    .shadow-none{box-shadow:none!important;}
    .w-100{width:100%!important;}
    .mr-0{margin-right:0!important;}
    .mb-0{margin-bottom:0!important;}
    .mr-1{margin-right:.25rem!important;}
    .mb-1{margin-bottom:.25rem!important;}
    .ml-1{margin-left:.25rem!important;}
    .mt-2{margin-top:.5rem!important;}
    .mr-2{margin-right:.5rem!important;}
    .mb-2{margin-bottom:.5rem!important;}
    .mb-3{margin-bottom:1rem!important;}
    .mt-4{margin-top:1.5rem!important;}
    .mb-4{margin-bottom:1.5rem!important;}
    .mb-5{margin-bottom:3rem!important;}
    .p-0{padding:0!important;}
    .pb-1{padding-bottom:.25rem!important;}
    .pt-2,.py-2{padding-top:.5rem!important;}
    .py-2{padding-bottom:.5rem!important;}
    .py-3{padding-top:1rem!important;}
    .px-3{padding-right:1rem!important;}
    .pb-3,.py-3{padding-bottom:1rem!important;}
    .pl-3,.px-3{padding-left:1rem!important;}
    .pb-4{padding-bottom:1.5rem!important;}
    .p-5{padding:3rem!important;}
    .pb-5{padding-bottom:3rem!important;}
    .ml-auto{margin-left:auto!important;}
    @media (min-width:768px){
        .mt-md-0{margin-top:0!important;}
        .mr-md-3{margin-right:1rem!important;}
        .mb-md-4{margin-bottom:1.5rem!important;}
        .pl-md-5{padding-left:3rem!important;}
        .mx-md-auto{margin-right:auto!important;}
        .mx-md-auto{margin-left:auto!important;}
    }
    @media (min-width:992px){
        .mb-lg-0{margin-bottom:0!important;}
        .mb-lg-1{margin-bottom:.25rem!important;}
        .mb-lg-n1{margin-bottom:-.25rem!important;}
    }
    @media (min-width:1200px){
        .mb-xl-0{margin-bottom:0!important;}
        .mr-xl-5{margin-right:3rem!important;}
    }
    .text-left{text-align:left!important;}
    .text-center{text-align:center!important;}
    .font-weight-normal{font-weight:400!important;}
    .font-weight-bold{font-weight:700!important;}
    .text-white{color:#fff!important;}
    .text-primary{color:#007bff!important;}
    @media print{
        *,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
        a:not(.btn){text-decoration:underline;}
        img{page-break-inside:avoid;}
        p,h2{orphans:3;widows:3;}
        h2{page-break-after:avoid;}
        body{min-width:992px!important;}
        .container{min-width:992px!important;}
    }
    /*! CSS Used from: http://safar.com/new/libs/font-awesome/css/font-awesome.css */
    .fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
    .fa-bars:before{content:"\f0c9";}
    /*! CSS Used from: http://safar.com/new/libs/icofont/icofont.min.css */
    [class^=icofont-]{font-family:IcoFont!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;white-space:nowrap;word-wrap:normal;direction:ltr;line-height:1;-webkit-font-feature-settings:"liga";-webkit-font-smoothing:antialiased;}
    .icofont-scroll-left:before{content:"\eaab";}
    /*! CSS Used from: http://safar.com/new/dist/frontend/css/app.css@_ver=1.1.1.css */
    [class*=" flaticon-"],[class^=flaticon-]{font-style:normal;}
    [class*=" flaticon-"]:after,[class*=" flaticon-"]:before,[class^=flaticon-]:after,[class^=flaticon-]:before{font-family:Flaticon;}
    .flaticon-user:before{content:"";}
    .flaticon-magnifying-glass:before{content:"";}
    .flaticon-hotel:before{content:"";}
    .flaticon-global-1:before{content:"";}
    .flaticon-climbing:before{content:"";}
    .flaticon-home:before{content:"";}
    .flaticon-sedan:before{content:"";}
    .flaticon-aeroplane:before{content:"";}
    .flaticon-pin-1:before{content:"";}
    .flaticon-phone-call:before{content:"";}
    .btn{border:none;box-shadow:none;border-radius:3px;padding:10px 20px;transition:background .2s,color .2s;font-size:14px;}
    .btn.btn-primary{background:#47bac2;}
    .form-control{border:1px solid #dae1e7;border-radius:3px;box-shadow:none;font-size:14px;}
    .form-control::-moz-placeholder{color:#999;}
    .form-control:-ms-input-placeholder{color:#999;}
    .form-control::placeholder{color:#999;}

    .bravo_wrap .bravo_form .g-field-search{flex:0 0 80%;max-width:80%;flex-grow:1;padding:0 15px;}
    @media (max-width:1023px){
        .bravo_wrap .bravo_form .g-field-search,.bravo_wrap .bravo_form .g-field-search [class*=col-]{flex:0 0 100%!important;max-width:100%!important;}
    }
    .bravo_wrap .bravo_form .g-field-search .mb-4{margin-bottom:0!important;}
    .bravo_wrap .bravo_form .g-button-submit{flex:0 0 20%;max-width:20%;flex-grow:1;position:relative;}
    @media (max-width:1023px){
        .bravo_wrap .bravo_form .g-button-submit{flex:0 0 100%!important;max-width:100%!important;text-align:right;}
    }

    h1,h2{margin-top:0;margin-bottom:.5rem;}
    p{margin-top:0;margin-bottom:1rem;}
    ul{margin-bottom:1rem;}
    ul{margin-top:0;}
    a{color:#297cbb;background-color:transparent;}
    a:hover{color:#1b527c;text-decoration:none;}
    figure{margin:0 0 1rem;}
    img{border-style:none;}
    img{vertical-align:middle;}


    h1,h2{margin-bottom:.5rem;font-weight:300;line-height:1.5;}
    h1{font-size:2.5rem;}
    h2{font-size:2rem;}
    .list-inline{padding-left:0;list-style:none;}
    .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
    @media (min-width:576px){
        .container{max-width:540px;}
    }
    @media (min-width:768px){
        .container{max-width:720px;}
    }
    @media (min-width:992px){
        .container{max-width:960px;}
    }
    @media (min-width:1200px){
        .container{max-width:1200px;}
    }
    @media (min-width:1480px){
        .container{max-width:1320px;}
    }
    .row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
    .col-lg-6,.col-md-4,.col-md-12{position:relative;width:100%;padding-right:15px;padding-left:15px;}
    @media (min-width:768px){
        .col-md-4{flex:0 0 33.33333%;max-width:33.33333%;}
        .col-md-12{flex:0 0 100%;max-width:100%;}
    }
    @media (min-width:992px){
        .col-lg-6{flex:0 0 50%;max-width:50%;}
    }
    .form-control{display:block;width:100%;height:calc(1.5em + 1.8rem + 4px);padding:.9rem 1rem;font-size:1rem;font-weight:400;line-height:1.5;color:#3b444f;background-color:#fff;background-clip:padding-box;border:2px solid #ebf0f7;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
    .form-control::-ms-expand{background-color:transparent;border:0;}
    .form-control:focus{color:#3b444f;background-color:#fff;border-color:#ebf0f7;outline:0;box-shadow:0 0 0 .2rem rgba(41,124,187,.25);}
    .form-control:-ms-input-placeholder{color:#5c6770;opacity:1;}
    .form-control:-ms-input-placeholder,.form-control::-moz-placeholder,.form-control::-ms-input-placeholder,.form-control::-webkit-input-placeholder,.form-control::placeholder{color:#5c6770;opacity:1;}
    .form-control:disabled{background-color:#f8fafd;opacity:1;}
    @media (prefers-reduced-motion:reduce){
        .form-control{transition:none;}
    }
    .btn{display:inline-block;font-weight:500;color:#3b444f;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.9rem 1rem;font-size:1rem;line-height:1.5;border-radius:.3125rem;transition:all .2s ease-in-out;}
    .btn:hover{color:#3b444f;text-decoration:none;}
    .btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(41,124,187,.25);}
    .btn:disabled{opacity:.65;}
    @media (prefers-reduced-motion:reduce){
        .btn{transition:none;}
    }
    .btn-primary{color:#fff;background-color:#297cbb;border-color:#297cbb;}
    .btn-primary:hover{color:#fff;background-color:#22679c;border-color:#206091;}
    .btn-primary:focus{box-shadow:0 0 0 .2rem rgba(73,144,197,.5);}
    .btn-primary:disabled{color:#fff;background-color:#297cbb;border-color:#297cbb;}
    .fade{transition:opacity .15s linear;}
    @media (prefers-reduced-motion:reduce){
        .fade{transition:none;}
    }
    .dropdown{position:relative;}
    .dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:8.4375rem;padding:1rem 0;margin:.125rem 0 0;font-size:1rem;color:#3b444f;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:0 solid rgba(0,0,0,.15);border-radius:.3125rem;}
    .input-group{position:relative;display:flex;flex-wrap:wrap;align-items:stretch;width:100%;}
    .input-group>.form-control{position:relative;flex:1 1 auto;width:1%;margin-bottom:0;}
    .input-group>.form-control:focus{z-index:3;}
    .input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0;}
    .nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none;}
    .nav-link{display:block;padding:.438rem 1rem;}
    .nav-link:focus,.nav-link:hover{text-decoration:none;}
    .tab-content>.tab-pane{display:none;}
    .tab-content>.active{display:block;}
    .navbar-brand{display:inline-block;padding-top:.2505rem;padding-bottom:.2505rem;margin-right:1.875rem;font-size:1.25rem;line-height:inherit;white-space:nowrap;}
    .navbar-brand:focus,.navbar-brand:hover{text-decoration:none;}
    .card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid #e7eaf3;border-radius:.3125rem;}
    .card-body{flex:1 1 auto;padding:1rem;}
    .border-bottom{border-bottom:1px solid #e7eaf3!important;}
    .border-0{border:0!important;}
    .d-inline-block{display:inline-block!important;}
    .d-block{display:block!important;}
    .d-flex{display:flex!important;}
    @media (min-width:768px){
        .d-md-block{display:block!important;}
    }
    .flex-column{flex-direction:column!important;}
    .flex-nowrap{flex-wrap:nowrap!important;}
    .justify-content-center{justify-content:center!important;}
    .justify-content-between{justify-content:space-between!important;}
    .align-items-end{align-items:flex-end!important;}
    .align-items-center{align-items:center!important;}
    @media (min-width:768px){
        .flex-md-row{flex-direction:row!important;}
    }
    @media (min-width:992px){
        .align-self-lg-end{align-self:flex-end!important;}
    }
    @media (min-width:1200px){
        .justify-content-xl-center{justify-content:center!important;}
    }
    .position-relative{position:relative!important;}
    .mr-0{margin-right:0!important;}
    .mb-0{margin-bottom:0!important;}
    .mr-1{margin-right:.25rem!important;}
    .mb-1{margin-bottom:.25rem!important;}
    .ml-1{margin-left:.25rem!important;}
    .mt-2{margin-top:.5rem!important;}
    .mr-2{margin-right:.5rem!important;}
    .mb-2{margin-bottom:.5rem!important;}
    .mb-3{margin-bottom:1rem!important;}
    .mt-4{margin-top:1.5rem!important;}
    .mb-4{margin-bottom:1.5rem!important;}
    .mb-5{margin-bottom:2rem!important;}
    .mt-6{margin-top:2.5rem!important;}
    .p-0{padding:0!important;}
    .pb-1{padding-bottom:.25rem!important;}
    .pt-2,.py-2{padding-top:.5rem!important;}
    .py-2{padding-bottom:.5rem!important;}
    .py-3{padding-top:1rem!important;}
    .px-3{padding-right:1rem!important;}
    .pb-3,.py-3{padding-bottom:1rem!important;}
    .pl-3,.px-3{padding-left:1rem!important;}
    .pb-4{padding-bottom:1.5rem!important;}
    .p-5{padding:2rem!important;}
    .pb-5{padding-bottom:2rem!important;}
    .py-8{padding-top:3.5rem!important;}
    .py-8{padding-bottom:3.5rem!important;}
    .ml-auto{margin-left:auto!important;}
    @media (min-width:768px){
        .mt-md-0{margin-top:0!important;}
        .mr-md-3{margin-right:1rem!important;}
        .mb-md-4{margin-bottom:1.5rem!important;}
        .pl-md-5{padding-left:2rem!important;}
        .mx-md-auto{margin-right:auto!important;}
        .mx-md-auto{margin-left:auto!important;}
    }
    @media (min-width:992px){
        .mb-lg-0{margin-bottom:0!important;}
        .mb-lg-1{margin-bottom:.25rem!important;}
        .mb-lg-n1{margin-bottom:-.25rem!important;}
    }
    @media (min-width:1200px){
        .mb-xl-0{margin-bottom:0!important;}
        .mr-xl-5{margin-right:2rem!important;}
        .pb-xl-8{padding-bottom:3.5rem!important;}
        .py-xl-10{padding-top:4.5rem!important;}
        .py-xl-10{padding-bottom:4.5rem!important;}
    }
    .text-left{text-align:left!important;}
    .text-center{text-align:center!important;}
    .font-weight-normal{font-weight:400!important;}
    .font-weight-bold{font-weight:700!important;}
    .text-primary{color:#297cbb!important;}
    .text-white{color:#fff!important;}
    a.text-white:focus,a.text-white:hover{color:#d9d9d9!important;}
    @media print{
        *,:after,:before{text-shadow:none!important;box-shadow:none!important;}
        a:not(.btn){text-decoration:underline;}
        img{page-break-inside:avoid;}
        h2,p{orphans:3;widows:3;}
        h2{page-break-after:avoid;}
        .container,body{min-width:992px!important;}
    }
    .w-100{width:100%!important;}
    @media (min-width:768px){
        .w-md-80{width:80%!important;}
    }
    @media (min-width:992px){
        .w-lg-50{width:50%!important;}
    }
    .space-bottom-1{padding-bottom:2rem!important;}
    .space-2{padding-top:4rem!important;}
    .space-2{padding-bottom:4rem!important;}
    @media (min-width:1200px){
        .space-top-xl-4{padding-top:12.5rem!important;}
    }
    body{-webkit-font-smoothing:antialiased;}
    p{color:#77838f;line-height:1.7;}
    figure{margin-bottom:0;}
    .fa{font-weight:900;}
    ::-moz-selection{color:#fff;background-color:#297cbb;}
    ::-moz-selection,::selection{color:#fff;background-color:#297cbb;}
    :focus,a:focus,button:focus{outline:0;}
    .btn:focus,.btn:not([disabled]):not(.disabled):active,.form-control:focus{box-shadow:0 0 0 0 transparent;}
    @media print{
        .btn,header{display:none;}
    }
    .u-header{position:relative;right:0;left:0;width:100%;z-index:1001;}
    .u-header__section{position:relative;z-index:1;background-color:#fff;box-shadow:0 1px 10px rgba(151,164,175,.1);}
    .u-header__shadow-on-show-hide{box-shadow:none;}
    .u-header__topbar [class*=u-header__topbar-divider]:not(.list-inline){position:relative;}
    .u-header__topbar [class*=u-header__topbar-divider]:not(.list-inline):before{content:"";background-color:#fff;position:absolute;width:1px;height:30px;left:0;display:block;top:50%;transform:translateY(-50%);}
    [class*=u-header--bg-transparent] .u-header__topbar [class*=u-header__topbar-divider]:not(.list-inline):before{opacity:.149;}
    .u-header__topbar .dropdown-menu{min-width:4.375rem;padding:.438rem 0;}
    @media (max-width:575.98px){
        .u-header__topbar{display:none;}
    }
    @media (max-width:1199.98px){
        .u-header__topbar-lg{display:none;}
    }
    @media (max-width:767.98px){
        .u-header__navbar-brand{margin-right:.625rem;}
    }
    .u-header__navbar-brand,.u-header__navbar-brand>img{padding-top:0;padding-bottom:0;width:auto;}
    .u-header__navbar-brand-center{display:flex;align-items:center;}
    .u-header[data-header-fix-effect]{transition:.3s ease;}
    .u-header--bg-transparent:not(.js-header-fix-moment) .u-header__section{background-color:transparent;box-shadow:none;}
    .u-header--bg-transparent .u-header__navbar-brand-on-scroll{display:none;}
    .u-header--bg-transparent .u-header__navbar-brand-default,.u-header--bg-transparent .u-header__navbar-brand-on-scroll{display:none;}
    .u-header--bg-transparent .u-header__navbar-brand-default{display:flex;}
    @media (min-width:1200px){
        .u-header--white-nav-links-xl:not(.bg-white):not(.js-header-fix-moment) .dropdown-nav-link{color:#fff;}
        .u-header--white-nav-links-xl:not(.bg-white):not(.js-header-fix-moment) .dropdown-nav-link:hover{color:hsla(0,0%,100%,.6);}
    }
    .u-header--abs-top{position:absolute;}
    .u-header--abs-top{top:0;bottom:auto;}
    .btn-primary[type]:active,.btn-primary[type]:focus,.btn-primary[type]:hover{box-shadow:0 4px 11px rgba(41,124,187,.35);}
    .btn-primary:hover,.btn-primary:not([href]),.btn-primary:not(label.btn){background-color:#297cbb;border-color:#297cbb;}
    @media (min-width:768px){
        .btn-md{min-width:11.375rem;height:3.75rem;}
    }
    @media (min-width:992px) and (max-width:1199.98px){
        .btn-md{min-width:2.188rem;height:3.75rem;}
    }
    .dropdown-menu{margin-top:.5rem;font-size:.875rem;padding-top:1rem;padding-bottom:1rem;box-shadow:0 5px 9px rgba(41,124,187,.075),0 5px 9px rgba(119,131,143,.075);}
    .dropdown-nav-link{color:#67747c;font-weight:400;font-size:.875rem;}
    .dropdown-nav-link:hover{color:#3b444f;}
    .form-control:focus{box-shadow:0 0 25px rgba(41,124,187,.1);border-color:rgba(41,124,187,.5);}
    .form-control{border-radius:.3125rem;font-size:.875rem;}
    .nav .nav-item:not(:first-child){margin-left:.25rem;}
    .nav .nav-item:not(:last-child){margin-right:.25rem;}
    @media (max-width:1479.98px){
        .tab-nav{overflow-x:auto;overflow-y:hidden;}
    }
    .tab-nav-boxed .nav-link{padding:.3rem 1.5rem;}
    .tab-nav-boxed .nav-link.active{border:1px solid #408fb9;background-color:#408fb9;border-radius:3px;}
    .tab-nav-boxed .nav-link.active .icon:after{content:"";display:block;position:absolute;bottom:-30px;left:24px;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-bottom:10px solid #fff;}
    @media (max-width:767.98px){
        .tab-nav-boxed .nav-link.active .icon:after{left:13px;}
    }
    @media screen and (-ms-high-contrast:active),screen and (-ms-high-contrast:none){
        .ie-height-40{height:40px;}
    }
    @media (min-width:1200px){
        .col-xl-2dot4{flex:0 0 20%;max-width:20%;}
    }
    [class*=gradient-overlay-half]{position:relative;z-index:1;}
    [class*=gradient-overlay-half]:before{position:absolute;top:0;bottom:0;right:0;z-index:-1;width:100%;height:100%;content:"";transition:all .2s ease-in-out;}
    .gradient-overlay-half-bg-gradient:before{background:linear-gradient(180deg,#1e2022,transparent 50%);}
    .gradient-overlay-half-bg-gradient:hover:before{background:linear-gradient(180deg,#1e2022,transparent 75%);}
    .gradient-overlay-half-black-gradient:before{background-color:#18181a;opacity:.5;}
    .bg-img-hero{background-position:top;}
    .bg-img-hero,.bg-img-hero-bottom{background-size:cover;background-repeat:no-repeat;}
    .bg-img-hero-bottom{background-position:bottom;}
    @media (min-width:1200px){
        .border-xl-bottom-0{border-bottom:0!important;}
    }
    .border-color-white{border-color:hsla(0,0%,100%,.149)!important;}
    .border-color-1{border-color:#eaeaea!important;}
    .border-color-8{border-color:#ebf0f7!important;}
    .destination{position:relative;}
    .destination:after{content:"";height:1px;width:50px;background-color:#fff;position:absolute;bottom:-2px;left:0;}
    .border-width-2{border-width:2px!important;}
    .rounded-border,.rounded-border:after,.rounded-border:before{border-radius:.188rem;}
    .border-radius-3{border-radius:3px!important;}
    .border-bottom{border-bottom:1px solid #ebf0f7;}
    .shadow-none{box-shadow:none!important;}
    .shadow-hover-2:active,.shadow-hover-2:focus,.shadow-hover-2:hover{box-shadow:0 0 10px 1px rgba(0,0,0,.3);}
    .tab-shadow{box-shadow:0 14px 50px 0 rgba(32,32,32,.15);}
    .height-40{height:2.5rem;}
    .min-height-240{min-height:15rem;}
    .font-size-3{font-size:2rem;}
    .font-size-14{font-size:.875rem;}
    .font-size-16{font-size:1rem;}
    .font-size-18{font-size:1.125rem;}
    .font-size-20{font-size:1.25rem;}
    .font-size-21{font-size:1.313rem;}
    .font-size-30{font-size:1.875rem;}
    .font-size-60{font-size:3.75rem;}
    .font-size-22{font-size:1.375rem;}
    @media (max-width:575.98px){
        .font-size-xs-30{font-size:1.875rem!important;}
    }
    .font-weight-bold,.font-weight-medium,.font-weight-semi-bold{font-weight:500!important;}
    .text-lh-1{line-height:1;}
    .section-title{font-size:1.875rem;color:#3b444f;font-weight:500;}
    .section-title:after{display:block;width:2.5rem;height:.125rem;background-color:#297cbb;content:" ";margin:1.5rem auto 0;}
    .text-black{color:#3b444f;}
    .transition-3d-hover{transition:all .2s ease-in-out;}
    .transition-3d-hover:focus,.transition-3d-hover:hover{transform:translateY(-3px);}
    .z-index-2{z-index:2;}
    body{margin:0;font-family:Rubik,Helvetica,Arial,sans-serif;font-size:1rem;font-weight:400;line-height:1.5;color:#3b444f;text-align:left;background-color:#fff;}
    a{text-decoration:none;}
    ul{padding:0;margin:0;}
    @media (max-width:768px){
        .bravo_wrap .bravo_topbar{display:none;}
    }
    .bravo_wrap .bravo_topbar .dropdown-menu{right:0;left:auto!important;top:15px!important;background:#fff;border-radius:5px;border:1px solid #ccc;}
    .bravo_wrap .bravo_topbar .dropdown-menu.width-auto{min-width:0;}
    .bravo_wrap .bravo_topbar .dropdown-menu.dropdown-menu-user{min-width:200px!important;}
    .bravo_wrap .bravo_topbar .dropdown-menu li{padding-left:0;padding-right:0;width:100%;}
    .bravo_wrap .bravo_topbar .dropdown-menu li a{display:block;padding:8px 15px;color:#767085;border-bottom:1px solid transparent;border-top:1px solid transparent;}
    .bravo_wrap .bravo_topbar .dropdown-menu li a:hover{text-decoration:none;border-bottom:1px solid #ccc;border-top:1px solid #ccc;}
    .bravo_wrap .bravo_topbar .dropdown-nav-link:after{display:inline-block;font-family:FontAwesome;font-size:80%;font-weight:900;content:"";margin-left:.5rem;}
    @media (max-width:1023px){
        .bravo_wrap .bravo_header .bravo-logo{padding:10px 0;}
    }
    @media (max-width:1023px){
        .bravo_wrap .bravo_header .content .header-right{width:10%;}
    }
    .bravo_wrap .bravo_header .content .header-right .bravo-more-menu{border:none;background:0 0;font-size:32px;padding:0 10px;float:right;display:none;color:#fff;transition:all .3s;}
    @media (max-width:991px){
        .bravo_wrap .bravo_header .content .header-right .bravo-more-menu{display:block;float:right;}
    }
    .bravo_wrap .bravo_header .bravo-menu-mobile{width:300px;position:fixed;top:0;left:0;height:100%;background:#fff;transform:translate(-105%);transition:all .3s;z-index:20;border-right:1px solid #767085;}
    @media (max-width:1023px){
        .bravo_wrap .bravo_header .bravo-menu-mobile{display:block!important;}
    }
    .bravo_wrap .bravo_header .bravo-menu-mobile .user-profile{border-bottom:1px solid #e6e6e6;}
    .bravo_wrap .bravo_header .bravo-menu-mobile .user-profile .b-close{position:absolute;right:10px;top:0;z-index:11;color:#fff;font-size:34px;cursor:pointer;line-height:40px;}
    .bravo_wrap .bravo_header .bravo-menu-mobile .g-menu{overflow-x:scroll;width:100%;}
    .bravo_wrap .bravo_header .bravo-menu-mobile .g-menu>ul{padding:10px 20px;list-style:none;}
    .bravo_wrap .bravo_header .bravo-menu-mobile .g-menu>ul>li a{color:#767085;border-bottom:1px solid #e6e6e6;display:block;transition:all .3s;text-decoration:none;padding:10px 0;}
    .bravo_wrap .bravo_header .bravo-menu-mobile .g-menu>ul>li a:hover{border-bottom:1px solid #767085;}
    .bravo_wrap .bravo_header .bravo-menu-mobile .g-menu>ul>li.active>a{border-bottom:1px dashed #767085;}
    /*! CSS Used from: http://safar.com/new/custom-css.css */
    .text-primary{color:#47bac2!important;}
    .btn-primary,.btn-primary:disabled,.btn-primary:not(label.btn),.btn-primary:not([href]),.btn-primary:hover,.section-title:after{background-color:#47bac2!important;}
    .btn-primary,.btn-primary:disabled,.btn-primary:not(label.btn),.btn-primary:not([href]),.btn-primary:hover{border-color:#47bac2!important;}
    /*! CSS Used from: http://safar.com/new/libs/flags/css/flag-icon.min.css */
    .flag-icon{background-size:contain;background-position:50%;background-repeat:no-repeat;position:relative;display:inline-block;width:1.33333333em;line-height:1em;}
    .flag-icon:before{content:"\00a0";}
    .flag-icon-ru{background-image:url(http://safar.com/new/libs/flags/flags/4x3/ru.svg);}
    .flag-icon-uz{background-image:url(http://safar.com/new/libs/flags/flags/4x3/uz.svg);}
    /*! CSS Used fontfaces */
    @font-face{font-family:IcoFont;font-weight:400;font-style:Regular;src:url(http://safar.com/new/libs/icofont/fonts/icofont.woff2) format("woff2"),url(http://safar.com/new/libs/icofont/fonts/icofont.woff) format("woff");}
    @font-face{font-family:Flaticon;src:url(http://safar.com/new/fonts/mytravel.eot@0b909e6487b1594d9a837b7590373131);src:url(http://safar.com/new/fonts/mytravel.eot@0b909e6487b1594d9a837b7590373131) format("embedded-opentype"),url(http://safar.com/new/fonts/mytravel.woff2@aed10cd610b88efea95e9ea7e5ef18f1) format("woff2"),url(http://safar.com/new/fonts/mytravel.woff@b01771189b7b651513b2f933dd038d29) format("woff"),url(http://safar.com/new/fonts/mytravel.ttf@16bcf78fd613e137f5bf976163135de1) format("truetype"),url(http://safar.com/new/fonts/mytravel.svg@b1b5c35414c7e0c8c8dd1e2e2c5e8516) format("svg");font-weight:400;font-style:normal;}
    @font-face{font-family:Flaticon;src:url(http://safar.com/new/fonts/mytravel.svg@b1b5c35414c7e0c8c8dd1e2e2c5e8516) format("svg");}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nMrXyi0A.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nFrXyi0A.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nDrXyi0A.woff2) format('woff2');unicode-range:U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nPrXyi0A.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nBrXw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nMrXyi0A.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nFrXyi0A.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nDrXyi0A.woff2) format('woff2');unicode-range:U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nPrXyi0A.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nBrXw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nMrXyi0A.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nFrXyi0A.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nDrXyi0A.woff2) format('woff2');unicode-range:U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nPrXyi0A.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nBrXw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nMrXyi0A.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nFrXyi0A.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nDrXyi0A.woff2) format('woff2');unicode-range:U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nPrXyi0A.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nBrXw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nMrXyi0A.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nFrXyi0A.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nDrXyi0A.woff2) format('woff2');unicode-range:U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nPrXyi0A.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
    @font-face{font-family:'Rubik';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v14/iJWKBXyIfDnIV7nBrXw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}




</style>
