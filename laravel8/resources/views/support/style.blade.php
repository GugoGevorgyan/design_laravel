@push('style')
    <style>
        body{
            margin: 0 auto;
            padding: 0;
        }
        .h-500{
            height: 500px;
            background-color: #1d68a7;
        }
        .Rectangle1{
            background-image: url("{{asset('storage/Rectangle1.png')}}");
            width: 500px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            align-items: center;
            padding-right: 220px;
        }

        .description{
            font-family: 'Montserrat';
            font-weight: 300;
            text-align: right;
            height: 320px;
            align-items: flex-end;
            flex-direction: column;
            justify-content: space-between;

        }

        .description_name{
            font-size: 40px;
            height: 110px;
        }

        .description_param{
            font-size: 30px;
            height: 110px;
        }
        p{
            margin-bottom: 0 !important;
        }
        .explore{
            width: 214px;
            height: 60px;
            border-radius: 30px !important;
        }
    </style>
@endpush
