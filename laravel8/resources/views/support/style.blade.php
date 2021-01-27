@push('style')
    <style>
        * {
            outline: 0.1px solid red;
        }

        body {
            margin: 0 auto;
            padding: 0;
        }
.menu{
    display: flex;
    justify-content: space-around;
    width: 100%;
    align-items: flex-end;
}
        .home_content, .popular_categories_container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .popular_categories_container {
            height: 330px;
            justify-content: space-evenly;
        }

        .h-500 {
            height: 500px;
        }

        /*.h-160{*/
        /*    height: 160px;*/
        /*}*/
        .Rectangle {
            width: 500px;
            background-repeat: no-repeat;
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
            /*height: 320px;*/
            align-items: flex-end;
            flex-direction: column;
            justify-content: space-between;

        }

        .description_param, .description_name {
            font-size: 30px;
            /*height: 160px;*/
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
        }

        .popular_categories_img {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 50%;
            border: 0.72055px solid #DEDEDE;
            margin: 10px;
        }

        .popular_categories_img_container {
            display: flex;
            flex-direction: row;
        }

        .popular_text {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
            text-transform: capitalize;
        }

        .select {
            width: 122px;
            height: 22px;
            font-size: 18px;
            line-height: 22px;
            border: none;
        }

        .container_select {
            width: 450px;
            justify-content: space-between;
        }
        .search{
            border-radius: 35px;
            overflow: hidden;
            width: 300px;
            background: #FFFFFF;
            opacity: 0.3;
            border: 1px solid #000000;
        }
        .input-group-text{
            background-color: white !important;
        }
        .form-control{
        border: none !important;
        }
    </style>
@endpush
