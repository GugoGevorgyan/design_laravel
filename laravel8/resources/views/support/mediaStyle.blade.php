@push('mediaStyle')
    <style>
        @media all and (min-width: 414px) and (max-width: 993px) {
            .vector_left_container,.vector_right_container,.search_container, .container_select {
                display: none !important;
            }
            .line{
                border: 1px solid #DEDEDE;
            }
            .img-fluid{
                width: 80px;
            }
            .menu{
                width: auto;
            }
            .navbar-expand-md ,.navbar-nav {
                flex-direction: row !important;
            }
            .hot_sales_container {
                width: 90%;
            }
            .hot_sales_imgs_container{
                width: 182px;
                height: 250px;
            }
            .hot_sales_img {
                width: calc(100% - 10px);
            }
            .hot_sales_img > img {
                width: inherit;
            }
            .popular_text {
                display: flex;
                justify-content: center;
            }
            .media_menu_icons{
                display: flex !important;
                width: 150px;
                justify-content: space-between;
            }
        }

        @media all and (min-width: 768px) and (max-width: 993px) {

        }

    </style>
@endpush
