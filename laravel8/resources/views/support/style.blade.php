@push('style')
    <style>
        * {
            /*outline: 0.1px solid red;*/
        }

        body {
            margin: 0 auto;
            padding: 0;
        }

        .subscribe_container,
        .no_repeat, .menu_ellipse, .Rectangle {
            background-repeat: no-repeat;
            background-position: center;
        }

        .input_subscribe, .subscribe, .footer_contact,
        .all_computers > div > div > a,
        .font18_size22 {
            font-family: Montserrat;
            font-size: 18px;
            line-height: 22px;
        }

        .font29_size24, .popular_text,
        .price_sale, .subscribe_text {
            font-family: Montserrat;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
        }

        .just_around,
        .flex_column, .center, .description, .just_between {
            display: flex;
            flex-direction: column;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            width: 100%;
            align-items: flex-end;
        }

        .menu_ellipse {
            background-image: url("{{asset('storage/Group221.png')}}");
            width: 6px;
            height: 100%;
        }

        .center, .popular_categories_img {
            align-items: center;
            justify-content: center;
        }

        .h-500 {
            height: 500px;
        }

        .search_container {
            width: 400px;
            justify-content: space-around;
        }

        .Rectangle {
            width: 500px;
            background-size: 100% 100%;
            align-items: center;
            padding-right: 180px;
        }

        .down {
            font-weight: 300;
            font-size: 64px;
            line-height: 78px;
            text-transform: uppercase;
            transform: rotate(180deg);
        }

        .Rectangle1 {
            background-image: url("{{asset('storage/Rectangle1.png')}}");
        }

        .Rectangle2 {
            background-image: url("{{asset('storage/Rectangle2.png')}}");
        }

        .description {
            font-family: 'Montserrat';
            font-weight: 300;
            text-align: right;
            align-items: flex-end;
        }

        .description, .just_between {
            justify-content: space-between;
        }

        .just_around {
            justify-content: space-around;
        }

        .description_param, .description_name {
            font-size: 30px;
        }
        .description_name {
            font-size: 45px;
        }

         .font_size {
             font-size: 45px;
         }

        p {
            margin-bottom: 0 !important;
        }

        .explore {
            font-family: 'Montserrat';
            border: none;
            width: 214px;
            height: 60px;
            border-radius: 30px;
            font-style: normal;
            font-weight: 300;
            font-size: 24px;
            line-height: 50px;
            margin-top: 30px;
        }

        .popular_categories_container {
            justify-content: space-evenly;
            padding: 46px 0;
            width: 70%;
        }
        .evenly1,.evenly{
            justify-content: space-evenly;
        }

        .popular_categories_img {
            display: flex;
            width: 160px;
            height: 160px;
            overflow: hidden;
            border-radius: 50%;
            border: 1px solid #DEDEDE;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .flex_row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .popular_text {
            font-style: normal;
            text-transform: capitalize;
        }

        .select {
            width: 130px;
            height: 22px;
            border: none;
        }
        .select > option{
            border: none;
            width: 180px;
            height: 52px;
            background: #FFFFFF;
        }

        .container_select {
            width: 450px;
            justify-content: space-between;
        }

        .search {
            border-radius: 35px;
            overflow: hidden;
            width: 300px;
            background: #FFFFFF;
            opacity: 0.3;
            border: 1px solid #000000;
        }

        .input-group-text {
            background-color: white !important;
        }

        .form-control {
            border: none !important;
        }

        .hot_sales_container {
            width: 61%;
            position: relative;
        }

        .sales_name,.yes_sale ,.font_16_20{
            font-family: Montserrat;
            font-size: 16px;
            line-height: 20px;
        }

        .yes_sale {
            Width: 70px;
            Height: 30px;
            background: #E11D1D;
            font-style: normal;
            font-weight: 600;
            left: 20px;
            position: absolute;
            color: #FFFFFF;
        }

        .hot_sales_imgs_container {
            width: 270px;
            height: 380px;
            margin: 30px 0;
            background: #FFFFFF;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .heart {
            position: absolute;
            right: 20px;
        }

        .img_heart {
            width: 40px;
        }

        .price_sale {
            font-style: normal;
            text-transform: capitalize;
            color: #E11D1D;
            margin: 0 10px 0 0;
        }

        .old_price {
            font-style: normal;
            font-weight: normal;
            color: #ADADAD;
        }

        .sales_name {
            font-style: normal;
            font-weight: normal;
            border: none;
            color: #747474;
        }

        .order_now {
            width: 160px;
            height: 50px;
            background: #333333;
            border-radius: 30px;
        }

        .sale {
            align-items: flex-end;
        }

        .sale_container{
            margin-left: 10px;
        }

        .vector_left {
            transform: rotate(180deg);
        }

        .vector_left_container {
            background-color: #FFFFFF;
            position: absolute;
            width: 37px;
            height: 37px;
            border-radius: 50%;
            border: 1px solid grey;
            right: 0;
            transform: translate(-40px, -20px);
        }

        /*.vector_right{*/
        /*    background-color: #FFFFFF;*/
        /*}*/
        .vector_right_container {
            background-color: #FFFFFF;
            position: absolute;
            width: 37px;
            height: 37px;
            border-radius: 50%;
            border: 1px solid grey;
            right: 0;
            transform: translate(0, -20px);
        }

        .all_computers > div > div > a {
            font-style: normal;
            font-weight: 600;
            color: rgba(0, 0, 0, 0.5);
        }

        .all_computers > div > div > a:hover {
            color: #E11D1D;
        }

        .all_computers__sort {
            width: 500px;
        }

        .subscribe_container {
            min-height: 660px;
            background-image: url("{{asset('storage/Rectangle38.png')}}");
        }


        .input_subscribe {
            width: 570px;
            height: 54px;
            background: #F5F5F5;
            border-radius: 100px;
            font-style: normal;
            font-weight: normal;
            padding-left: 25px;
            border: none;
            margin: 8px;
        }

        .subscribe {
            width: 439px;
            height: 60px;
            background: #E11D1D;
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            color: #FFFFFF;
            font-weight: 600;
            border: none;
        }

        .subscribe_text {
            font-style: italic;
            text-transform: uppercase;
            color: #FFFFFF;

        }

        .subscribe_form_container {
            height: 285px;
            justify-content: space-between;
        }

        .subscribe_form {
            height: 235px;
            justify-content: space-between;
        }

        .footer__list {
            height: 444px;
            background: #151414;
            font-family: Montserrat;
            font-style: normal;
            font-weight: 300;
            font-size: 18px;
            line-height: 44px;
            color: #DEDEDE;
        }

        .social_container {
            width: 50px;
            height: 50px;
            background: #DEDEDE;
            border-radius: 50%;
            margin: 20px 14px 0 0;
        }

        .footer_contact {
            font-style: normal;
            font-weight: 600;
            color: #FFFFFF;
        }

        .d_none{
            display: none !important;
        }
        .line {
            border: 1px solid #DEDEDE;
        }

        .prod > li > a{
            color: #DEDEDE;
            font-size: 18px;
            line-height: 30px;
        }
        .about_text{
            font-family: Montserrat;
            font-size: 14px;
            line-height: 24px;
            color: #DEDEDE;
        }

        .footer__list__container{
            padding: 0 30px !important;
        }
        .follow_us,.about_us__container{
            display: none;
        }

        p.text-sm.text-gray-700.leading-5{
           display: none;
       }
        p.text-sm.text-gray-700.leading-5,
        .rounded-md > a:nth-child(6n+3){
            display: none;
        }
       span[aria-current="page"] > span, span[aria-disabled="true"] > span, .rounded-md > a{
           border-radius: 50%;
           width: 39px;
           height: 39px;
           padding: 0 !important;
           justify-content: center;
           margin: 4px;
           font-family: Montserrat;
           font-weight: 600;
           font-size: 18px;
       }
        .shadow-sm{
            box-shadow: 0 0 0 0 !important;

        }
        .row{
            justify-content: flex-end;
            margin: 0 0 60px;
        }
        .row > div:first-child{
            padding: 0;
        }
        .row{
            justify-content: flex-end;
            margin: 0 0 60px;
        }
        span[aria-current="page"] > span{
            background-color: #E11D1D !important;
            color: #FFFFFF !important;
        }
</style>


@endpush
